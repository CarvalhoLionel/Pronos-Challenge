<?php

namespace Pronos\PronosticsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pronos\PronosticsBundle\Entity\Daytime;
use Pronos\PronosticsBundle\Form\DaytimeType;

/**
 * Daytime controller.
 *
 */
class DaytimeController extends Controller
{

    /**
     * Lists all Daytime entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PronosPronosticsBundle:Daytime')->findAll();

        return $this->render('PronosPronosticsBundle:Daytime:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Daytime entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Daytime();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('daytime_show', array('id' => $entity->getId())));
        }

        return $this->render('PronosPronosticsBundle:Daytime:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Daytime entity.
     *
     * @param Daytime $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Daytime $entity)
    {
        $form = $this->createForm(new DaytimeType(), $entity, array(
            'action' => $this->generateUrl('daytime_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Daytime entity.
     *
     */
    public function newAction()
    {
        $entity = new Daytime();
        $form   = $this->createCreateForm($entity);

        return $this->render('PronosPronosticsBundle:Daytime:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Daytime entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PronosPronosticsBundle:Daytime')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Daytime entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PronosPronosticsBundle:Daytime:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Daytime entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PronosPronosticsBundle:Daytime')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Daytime entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PronosPronosticsBundle:Daytime:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Daytime entity.
    *
    * @param Daytime $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Daytime $entity)
    {
        $form = $this->createForm(new DaytimeType(), $entity, array(
            'action' => $this->generateUrl('daytime_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Daytime entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PronosPronosticsBundle:Daytime')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Daytime entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('daytime_edit', array('id' => $id)));
        }

        return $this->render('PronosPronosticsBundle:Daytime:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Daytime entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PronosPronosticsBundle:Daytime')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Daytime entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('daytime'));
    }

    /**
     * Creates a form to delete a Daytime entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('daytime_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
