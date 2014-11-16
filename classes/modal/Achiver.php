<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Achivers
 *
 * @author Toshiba
 */
class Achivers {
    private $achiverId;
    private $firstName;
    private $lastName;
    private $location;
    private $Age;
    private $Problem;
    private $solution;
    private $message;
    private $achievement;
    private $picture;
    
    public function getAchiverId() {
        return $this->achiverId;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getAge() {
        return $this->Age;
    }

    public function getProblem() {
        return $this->Problem;
    }

    public function getSolution() {
        return $this->solution;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getAchievement() {
        return $this->achievement;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function setAchiverId($achiverId) {
        $this->achiverId = $achiverId;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setAge($Age) {
        $this->Age = $Age;
    }

    public function setProblem($Problem) {
        $this->Problem = $Problem;
    }

    public function setSolution($solution) {
        $this->solution = $solution;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function setAchievement($achievement) {
        $this->achievement = $achievement;
    }

    public function setPicture($picture) {
        $this->picture = $picture;
    }


}
