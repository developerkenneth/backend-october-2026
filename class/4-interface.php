<?php

interface Payment
{
    public function transfer();
    public function pos();
    public function cash();
    public function credit();
}

class PayForFood implements Payment
{


    public function transfer()
    {
        echo " we accept transfer";
    }


    public function pos()
    {
        echo " we accept pos";
    }


    public function cash()
    {
        echo " we accept cash";
    }

    public function credit()
    {
        echo " we accept credit";
    }
}
