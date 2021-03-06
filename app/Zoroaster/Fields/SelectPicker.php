<?php

    namespace App\Zoroaster\Fields;


    use KarimQaderi\Zoroaster\Fields\Extend\Field;
    use KarimQaderi\Zoroaster\Fields\Traits\Resource;

    class SelectPicker extends Field
    {
         use Resource;


       /**
        * @param Field $field
        * @param $data
        * @param null $resourceRequest
        * @return \Illuminate\View\View
        */
       public function viewForm($field , $data , $resourceRequest = null)
       {

           return view('fields.SelectPicker.Form')->with(
               [
                   'field' => $field ,
                   'data' => $data ,
                   'value' => isset($data->{$field->name}) ? $data->{$field->name} : null ,
                   'resourceRequest' => $resourceRequest ,
               ]);
       }

       /**
        * @param Field $field
        * @param $data
        * @param null $resourceRequest
        * @return \Illuminate\View\View
        */
       public function viewDetail($field , $data , $resourceRequest = null)
       {
           return view('fields.SelectPicker.Detail')->with(
               [
                   'field' => $field ,
                   'data' => $data ,
                   'value' => $this->displayCallback($data , $resourceRequest , $field) ,
                   'resourceRequest' => $resourceRequest ,
               ]);
       }

       /**
        * @param Field $field
        * @param $data
        * @param null $resourceRequest
        * @return \Illuminate\View\View
        */
       public function viewIndex($field , $data , $resourceRequest = null)
       {
           return view('fields.SelectPicker.Index')->with(
               [
                   'field' => $field ,
                   'data' => $data ,
                   'value' => $this->displayCallback($data , $resourceRequest , $field) ,
                   'resourceRequest' => $resourceRequest ,
               ]);
       }


       public function displayCallback($data , $resourceRequest , $field)
       {
           if(is_callable($field->displayCallback))
               return call_user_func($field->displayCallback , $data , $resourceRequest , $field);

           return data_get($data , $field->name);
       }

    }
