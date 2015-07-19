<?php

namespace Pronos\PronosticsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pronos\PronosticsBundle\Entity\Pronos;
use Pronos\PronosticsBundle\Form\PronosType;

/**
 * Pronos controller.
 *
 */
class PronosController extends Controller
{

    /**
     * Lists all Pronos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PronosPronosticsBundle:Pronos')->findAll();

        return $this->render('PronosPronosticsBundle:Pronos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Pronos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Pronos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('pronos_show', array('id' => $entity->getId())));
        }

        return $this->render('PronosPronosticsBundle:Pronos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Pronos entity.
     *
     * @param Pronos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Pronos $entity)
    {
        $form = $this->createForm(new PronosType(), $entity, array(
            'action' => $this->generateUrl('pronos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Pronos entity.
     *
     */
    public function newAction()
    {
        $entity = new Pronos();
        $form   = $this->createCreateForm($entity);

        return $this->render('PronosPronosticsBundle:Pronos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pronos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PronosPronosticsBundle:Pronos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pronos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PronosPronosticsBundle:Pronos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Pronos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PronosPronosticsBundle:Pronos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pronos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PronosPronosticsBundle:Pronos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Pronos entity.
    *
    * @param Pronos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Pronos $entity)
    {
        $form = $this->createForm(new PronosType(), $entity, array(
            'action' => $this->generateUrl('pronos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Pronos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PronosPronosticsBundle:Pronos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pronos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pronos_edit', array('id' => $id)));
        }

        return $this->render('PronosPronosticsBundle:Pronos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Pronos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PronosPronosticsBundle:Pronos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Pronos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pronos'));
    }

    /**
     * Creates a form to delete a Pronos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pronos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
