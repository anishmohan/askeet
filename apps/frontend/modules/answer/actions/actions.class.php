<?php

/**
 * answer actions.
 *
 * @package    askeet
 * @subpackage answer
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class answerActions extends sfActions
{
  public function executeIndex()
  {
    $this->answerList = AnswerPeer::doSelect(new Criteria());
  }

  public function executeCreate()
  {
    $this->form = new AnswerForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new AnswerForm(AnswerPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new AnswerForm(AnswerPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('answer'));
    if ($this->form->isValid())
    {
      $answer = $this->form->save();

      $this->redirect('answer/edit?id='.$answer->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($answer = AnswerPeer::retrieveByPk($request->getParameter('id')));

    $answer->delete();

    $this->redirect('answer/index');
  }
}
