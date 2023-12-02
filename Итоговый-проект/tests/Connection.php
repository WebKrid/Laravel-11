<?php 
@extends('form_news.php');
@extends('home_news_contoller.php');

class NewsControllerTest extends TestCase {  // тест об успешном подключении
   public function testSuccesNewsList(): void 
   {
      $response = $this->get(route('admin_blade.php'));

      $response->assertStatus( 200 );
   }
}

   public function testSuccesCreateForm(): void // тест на возврата формы
   {
      $response = $this->get(route('admin.news.create'));

      $response->assertStatus(200);
   }

   public function testErrorStoreResponse(): void { // тест Хранения данных
      $postData = [
         'author' => fake()->userName(),
         'status' => 'DRAFT',
         'description' => fake()->text(100),
      ];
   }
  
   $response = $this->post(route('admin.news.create'), $postData); // тест проверки статуса подключении
   $response->assertStatus(302);

   $response = $this->post(route('admin.news.store'), $postData); // тест проверки возврата подключении
   
   $response->assertStatus(200);
   $response->assertJson($postData);

   public function ErrorConnection(): void { // Тест ошибки подключении 
      if(!$postDate) {
        return echo('Произошла ошибка при подключении');
      }
   }

   public function ErrorTesturl(): void { // Тест об ошибки не полной url 
    if ($postDate ==! url) {
      return echo('Не найдена ссылка для подключении к сайту по url');
    }
    }


    public function Date_method(): void { // - тест - метод о данных переданных в форму
     method::all(home_news_controller.php);
    }

     public function get_method(): void {  // - тест - метод о данных которые не были переданы через get параметр 
     method::url(home_news_controller.php);
     }

     public function method(): void { // тест - метод который возрвщает имя запроса метода 
      method::method(home_news_contoller.php)
     }



     public function ErrorConectForm method(): void { /// Тест - метод который проверяет подключение формы на сайте  \\ 1
      if(!$form) {
         return echo('Произошла ошибка при поключении к форме ');
      }
     }
 
    public function ErrorTesturl(): void { // Тест об ошибки При вводе цифр в url строку \\ 2
    if (!$form ==! null) {
      return echo('Не найдена ссылка для подключении к сайту по url (Допущенна ошибка в некоректном символе)');
    }
    }

    public function get_method(): void { // Ошибка в неправильно переданных данных через get параметр 
        if (!$form ==! get ) {
        return echo ('Некоректно были переданны данные');
        }
    }