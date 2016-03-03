<?php

// This class cannot be instantiated
abstract class Database
{
}

// But these ones can
class Mysql extends Database{}

class Postgres extends Database{}

class Mongo extends Database{}

// -------------------------------------

$db = new Mysql();
