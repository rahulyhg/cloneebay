<?php

class AddpostController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function addAction()
    {
       $categories = $this->_request->getParam('cat');

       if($categories == 'Fashion')
       {
          $this->fashionAction();
       }
       elseif ($categories == 'Motors') {
           $this->motorsAction();
       }
       elseif ($categories == 'Electronics') {
          $this->electronicsAction();
       }
       elseif ($categories == 'Collectable & Art') {
           $this->collectableArtAction();
       }
       elseif ($categories == 'Home, Outdoors & Decor') {
             $this->homeAndDecorationAction();
       }
       elseif ($categories == 'CD & Media') {
          $this->cdmediaAction();
       }
       elseif ($categories == 'Entertainment') {
           # code...
       }
       elseif ($categories == 'Sports Goods') {
          $this->sportsAction();
       } 
       else
       {
           echo "genral";
       }   
    }

    public function selectCatagoryAction()
    {
      if(Zend_Auth::getInstance()->hasIdentity())
      {
        $cat = new Application_Model_Categories();
        $this->view->cat = $cat->fetchAll()->toArray();

      }
      else
      {
          $this->_redirect('/user/sign-in');
      }
    }

    public function fashionAction()
    {

       $_SESSION = $this->_request->getParam('cat');

        $form = new Application_Form_Fashion();
        $this->view->form = $form;

         if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                  $data = array();
                   $products = new Application_Model_Products();
                   $id = Zend_Auth::getInstance()->getIdentity()->id;
                   $data = $form->getValues();
                   $data['user_id'] = $id;
                 
                   $products->insert($data);
                   echo "values added";
                   $form->reset();
                }
                else{
                    echo "not added";
                }
            
    
    
    }
  }

    public function motorsAction()
    { 
      
        $_SESSION = $this->_request->getParam('cat');
        
        
        $form = new Application_Form_Motors();
        $this->view->form = $form;

         if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                   $products = new Application_Model_Products();
                   $id = Zend_Auth::getInstance()->getIdentity()->id;
                   $data = $form->getValues();
                   $data['user_id'] = $id;
                 
                   $products->insert($data);
                   $form->reset();
                }
                else{
                    echo "not added";
                }
            
    
    
    }
    }

    public function homeAndDecorationAction()
    {
      $_SESSION = $this->_request->getParam('cat');
        $form = new Application_Form_HomeDecoration();
        $this->view->form = $form;
         $_SESSION = $this->_request->getParam('cat');
         
        if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                   $products = new Application_Model_Products();
                   $id = Zend_Auth::getInstance()->getIdentity()->id;
                   $data = $form->getValues();
                   $data['user_id'] = $id;
                 
                   $products->insert($data);
                   echo "values added";
                   $form->reset();
                }
                else{
                    echo "not added";
                }
            
    
    
    }
    }

    public function electronicsAction()
    {
      $_SESSION = $this->_request->getParam('cat');
        $form = new Application_Form_Electronics();
        $this->view->form = $form;

         if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                   $products = new Application_Model_Products();
                   $id = Zend_Auth::getInstance()->getIdentity()->id;
                   $data = $form->getValues();
                   $data['user_id'] = $id;
                 
                   $products->insert($data);
                   echo "values added";
                   $form->reset();
                }
                else{
                    echo "not added";
                }
            
    }
  }

    public function cdmediaAction()
    {
      $_SESSION = $this->_request->getParam('cat');
        $form = new Application_Form_CdMedia();
        $this->view->form = $form;

         if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                   $products = new Application_Model_Products();
                   $id = Zend_Auth::getInstance()->getIdentity()->id;
                   $data = $form->getValues();
                   $data['user_id'] = $id;
                 
                   $products->insert($data);
                   echo "values added";
                   $form->reset();
                }
                else{
                    echo "not added";
                }
            
    }
  } 

    public function sportsAction()
    {
      $_SESSION = $this->_request->getParam('cat');
        $form = new Application_Form_Sports();
        $this->view->form = $form;

         if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                  $products = new Application_Model_Products();
                   $id = Zend_Auth::getInstance()->getIdentity()->id;
                   $data = $form->getValues();
                   $data['user_id'] = $id;
                 
                   $products->insert($data);                   echo "values added";
                   $form->reset();
                }
                else{
                    echo "not added";
                }
            
    }
  }

    public function collectableArtAction()
    {
      $_SESSION = $this->_request->getParam('cat');
        $form = new Application_Form_CollectableArt();
        $this->view->form = $form;
        if ($this->getRequest()->isPost()) 
            {
            
            $formData = $this->getRequest()->getPost();
            

            if ($form->isValid($formData)) 
                {
                   $products = new Application_Model_Products();
                   $id = Zend_Auth::getInstance()->getIdentity()->id;
                   $data = $form->getValues();
                   $data['user_id'] = $id;
                 
                   $products->insert($data);
                   echo "values added";
                   $form->reset();
                }
                else{
                    echo "not added";
                }
            
    
    
    }
    }


}
