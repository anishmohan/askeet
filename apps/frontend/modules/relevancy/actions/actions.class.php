<?php

/**
 * relevancy actions.
 *
 * @package    askeet
 * @subpackage relevancy
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class relevancyActions extends sfActions
{
  public function executeIndex()
  {
    $this->relevancyList = RelevancyPeer::doSelect(new Criteria());
  }

  public function executeCreate()
  {
    $this->form = new RelevancyForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new RelevancyForm(RelevancyPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new RelevancyForm(RelevancyPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('relevancy'));
    if ($this->form->isValid())
    {
      $relevancy = $this->form->save();

      $this->redirect('relevancy/edit?id='.$relevancy->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($relevancy = RelevancyPeer::retrieveByPk($request->getParameter('id')));

    $relevancy->delete();

    $this->redirect('relevancy/index');
  }
}
