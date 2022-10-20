<?php

    $proizvodi = array(
        array(
            'id'=> 1,
            'naziv'=>'Laptop',
            'cena'=>800
        ),
        array(
            'id'=> 2,
            'naziv'=>'Mis',
            'cena'=>40
        ),
        array(
            'id'=> 3,   
            'naziv'=>'Slusalice',
            'cena'=>50
        )
        );

    session_start();

        if(!isset($_SESSION['korpa'])){
            $_SESSION['korpa'] = array();
        }

        if(isset($_POST['submit']) && ($_POST['submit'] == 'Kupi')){
            $_SESSION['korpa'][] = $_POST['id'];

            header('Location: .');
            exit();
        }

        if(isset($_POST['submit']) && ($_POST['submit'] == 'isprazni')){
            $_SESSION['korpa'] = array();

            header('Location: ?vidi_korpu');
            exit();
        }

        if(isset($_GET['vidi_korpu'])){
            $korpa = array();
            $ukupno = 0;

            foreach($_SESSION['korpa'] as $id){
                foreach($proizvodi as $pr){
                    if($pr['id'] == $id){
                        $korpa[] = $pr;
                        $ukupno+=$pr['cena'];
                    }
                }
            }
            include "korpa.php";
            exit();
        }

        include "katalog.php";


?>