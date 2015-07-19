<?php

namespace Pronos\PronosticsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pronos\PronosticsBundle\Entity\Rules;
use Pronos\PronosticsBundle\Form\RulesType;

/**
 * Rules controller.
 *
 */
class RulesController extends Controller
{

    /**
     * Lists all Rules entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PronosPronosticsBundle:Rules')->findAll();

        return $this->render('PronosPronosticsBundle:Rules:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Rules entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Rules();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rules_show', array('id' => $entity->getId())));
        }

        return $this->render('PronosPronosticsBundle:Rules:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Rules entity.
     *
     * @param Rules $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rules $entity)
    {
        $form = $this->createForm(new RulesType(), $entity, array(
            'action' => $this->generateUrl('rules_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Rules entity.
     *
     */
    public function newAction()
    {
        $entity = new Rules();
        $form   = $this->createCreateForm($entity);

        return $this->render('PronosPronosticsBundle:Rules:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rules entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PronosPronosticsBundle:Rules')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rules entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PronosPronosticsBundle:Rules:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rules entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PronosPronosticsBundle:Rules')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rules entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PronosPronosticsBundle:Rules:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rules entity.
    *
    * @param Rules $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rules $entity)
    {
        $form = $this->createForm(new RulesType(), $entity, array(
            'action' => $this->generateUrl('rules_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Rules entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PronosPronosticsBundle:Rules')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rules entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rules_edit', array('id' => $id)));
        }

        return $this->render('PronosPronosticsBundle:Rules:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Rules entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PronosPronosticsBundle:Rules')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rules entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rules'));
    }

    /**
     * Creates a form to delete a Rules entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rules_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
