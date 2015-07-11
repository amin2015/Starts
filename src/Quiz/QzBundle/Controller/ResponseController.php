<?php

namespace Quiz\QzBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Quiz\QzBundle\Entity\Response;
use Quiz\QzBundle\Form\ResponseType;

/**
 * Response controller.
 *
 * @Route("/response")
 */
class ResponseController extends Controller
{

    /**
     * Lists all Response entities.
     *
     * @Route("/", name="response")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('QuizQzBundle:Response')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Response entity.
     *
     * @Route("/", name="response_create")
     * @Method("POST")
     * @Template("QuizQzBundle:Response:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Response();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->preUpload();
            $entity->upload(); 
            $em->persist($entity);
            $em->flush();
           
            return $this->redirect($this->generateUrl('responses_question_list', array('id' => $entity->getQuestionId()->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Response entity.
     *
     * @param Response $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Response $entity)
    {
        $form = $this->createForm(new ResponseType(), $entity, array(
            'action' => $this->generateUrl('response_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Response entity.
     *
     * @Route("/new", name="response_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Response();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Response entity.
     *
     * @Route("/{id}", name="response_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuizQzBundle:Response')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Response entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Response entity.
     *
     * @Route("/{id}/edit", name="response_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuizQzBundle:Response')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Response entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Response entity.
    *
    * @param Response $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Response $entity)
    {
        $form = $this->createForm(new ResponseType(), $entity, array(
            'action' => $this->generateUrl('response_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Response entity.
     *
     * @Route("/{id}", name="response_update")
     * @Method("PUT")
     * @Template("QuizQzBundle:Response:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('QuizQzBundle:Response')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Response entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity->preUpload();
            $entity->upload(); 
            $em->flush();

            return $this->redirect($this->generateUrl('response'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Response entity.
     *
     * @Route("/{id}", name="response_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('QuizQzBundle:Response')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Response entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('response'));
    }

    /**
     * Creates a form to delete a Response entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('response_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
      /**
     * List response of question entity.
     *
     * @Route("/{id}/list-responses", name="responses_question_list")
     * @Method("GET")
     * @Template()
     */
    public function responsesListAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
  
        $entities = $em->getRepository('QuizQzBundle:Response')->getResponsesList($id);

        return array(
            'entities' => $entities,
        );
    }
}
