<?php

/**
 * user actions.
 *
 * @package    askeet
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class userActions extends sfActions
{
  public function executeIndex()
  {
    $this->userList = UserPeer::doSelect(new Criteria());
  }

  public function executeCreate()
  {
    $this->form = new UserForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new UserForm(UserPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new UserForm(UserPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('user'));
    if ($this->form->isValid())
    {
      $user = $this->form->save();

      $this->redirect('user/edit?id='.$user->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($user = UserPeer::retrieveByPk($request->getParameter('id')));

    $user->delete();

    $this->redirect('user/index');
  }
}
