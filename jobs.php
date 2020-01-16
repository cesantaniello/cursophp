<?php

class Job {
  private $title;
  public $description;
  public $visible;
  public $months;

  public function setTitle($title){
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

$job1 = new Job();
$job1 -> setTitle('PHP Developer');
$job1 -> description = 'This is an awesome job!!!';
$job1 -> visible = true;   
$job1 -> months = 16; 

$job2 = new Job();
$job2 -> setTitle('Python Developer');
$job2 -> description = 'This is an awesome job!!!';
$job2 -> visible = true;   
$job2 -> months = 24;

$jobs = [
  $job1,
  $job2
/*  [
    'title' => ,
    '' => ,
    'visible' => ,
    'months' => 
  ],
  [
    'title' => 'Python Dev',
    'visible' => false,
    'months' => 14
  ],
  [
    'title' => 'Devops',
    'visible' => true,
    'months' => 5
  ],
  [
    'title' => 'Node Dev',
    'visible' => true,
    'months' => 24
  ],
  [
    'title' => 'Frontend Dev',
    'visible' => true,
    'months' => 3
  ]*/
];

function getDuration($months) {
  $years = floor($months / 12);
  $extraMonths = $months % 12;

  return "$years years $extraMonths months";
}

function printJob($job) {
  if($job -> visible == false) {
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>' . $job -> getTitle . '</h5>';
  echo '<p>' . $job -> description . '</p>';
  echo '<p>' . getDuration($job -> months) . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}