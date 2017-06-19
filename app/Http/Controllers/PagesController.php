<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {
    $firstName = "Ugur";
    $lastName = "Kafali";
    $fullName = $firstName . " " . $lastName;
    $data = [];
    $data["lastName"] = $lastName;
    //return view('pages/welcome')->with("fullname", $fullName);
    //View::make()
    return view('pages/welcome')->withFullname($fullName)->withFirstname($firstName)->withData($data);
  }

  public function getAbout() {
    return view('pages/about');
  }

  public function getContact() {
    return view('pages/contact');
  }

}
