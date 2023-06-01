<?php

    class Question extends Controller
    {

        function __construct()
        {
            parent::__construct();

        }

        function createQuestionProperties(){
            $Object = $this->loadModel('Properties/QuestionModel');
            $Object->addQuestionProperties();
            $LOC = $_POST['que_loc'];
            
            if($LOC === '/'){
                header("Location: http://localhost/");
            }else{
                header("Location: http://localhost/$LOC");
            }

            die();
        }
        
    }

?>