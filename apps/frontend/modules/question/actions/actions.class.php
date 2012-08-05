<?php

/**
 * question actions.
 *
 * @package    askeet
 * @subpackage question
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class questionActions extends sfActions
{
  public function executeIndex()
  {
    $this->questionList = QuestionPeer::doSelect(new Criteria());
  }

  public function executeCreate()
  {
    $this->form = new QuestionForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new QuestionForm(QuestionPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new QuestionForm(QuestionPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('question'));
    if ($this->form->isValid())
    {
      $question = $this->form->save();

      $this->redirect('question/edit?id='.$question->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($question = QuestionPeer::retrieveByPk($request->getParameter('id')));

    $question->delete();

    $this->redirect('question/index');
  }
}
