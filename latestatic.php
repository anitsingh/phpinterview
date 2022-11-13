<?php
class student
{
   public static $my_name = 'Joe';
   public static function getName()
   {
      return "The name of the student is : " . self::$my_name;
   }
   public static function getAge()
   {
      echo static::getName();
   }
}
class Professor extends student
{
   public static function getName()
   {
      return "<br/>The name of the student is : " . self::$my_name . " and age is 24.";
   }
}
student::getAge();
echo "
";
Professor::getAge();
?>