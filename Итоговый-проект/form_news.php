<?php
@extends('admin_blade.php');
@extends('connection.php');
@section('content')

@error('route') <x-alert type="error_valitation" :form="$form"></x-alert> @enderror 

public static function rules()
{
   $tableValitCategori = ( new Category())->getTable();
   return [
      'title' => 'required|max:200',
      'inform' => 'required',
      'categori_id' => "required|exists:{$form},id";
      ],
     function return_list {
       return method::validated(get->rules->form)
     }
};


?>
<h1>Форма получения выгрузки</h1>
<form action="{{route('admin_blade.php')}}" method="post">
   <input name="title_new" placeholder="Название новости"> <br>
   <textarea name="inform" placeholder="Информация"></textarea><br>
   <label name="New_news">Новость приватна </label>
   <label name="title_news"></label>
   <button type="submit">Добавить новость</button>

   <input type="Имя заказчика" class="form_tatle_news" placeholder="Имя заказчика" id="form_1">
   <input type="Номер телефона" class="form_tatle_news" placeholder="Номер телефона" id="form_1">
   <input type="Email" class="form_tatle_news" placeholder="email" id="form_1">
   <input type="text" class="form_tatle_news" placeholder="Какая ваша цель посещения сайта ? (что вы хотите получить )" id="form_1">
</form>

