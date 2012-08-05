<?php

/**
 * interest actions.
 *
 * @package    askeet
 * @subpackage interest
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class interestActions extends sfActions
{
  public function executeIndex()
  {
    $this->interestList = InterestPeer::doSelect(new Criteria());
  }

  public function executeCreate()
  {
    $this->form = new InterestForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new InterestForm(InterestPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new InterestForm(InterestPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('interest'));
    if ($this->form->isValid())
    {
      $interest = $this->form->save();

      $this->redirect('interest/edit?id='.$interest->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($interest = InterestPeer::retrieveByPk($request->getParameter('id')));

    $interest->delete();

    $this->redirect('interest/index');
  }
}
