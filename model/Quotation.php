<?php
require_once __DIR__ . "/ItemBag.php";
//require_once __DIR__ . "/ItemBox.php";
//require_once __DIR__ . "/ItemIndividual.php";
//require_once __DIR__ . "/ItemSheet.php";
//require_once __DIR__ . "/ItemSaco.php";
//require_once __DIR__ . "/ItemFondoAutomatico.php";
class Quotation implements JsonSerializable
{
  private $nameClient;
  private $lastNameClient;
  private $company;
  private $address;
  private $city;
  private $items;
  private $email;
  private $phoneNumber;
  private $cellphoneNumber;
  private $extraInformation;
  private $id;
  private $file;
  private $idClient;
  private $solved;
  private $dateSolved;
  private $idAdminSolved;
  private $createdAt;
  private $idAdminAssigned;
  private $dateAssigned;
  private $paymentConditions;
  private $validity;
  private $deliveryTime;

  public function __construct()
  {
    $this->company = null;
    $this->phoneNumber = null;
    $this->extraInformation = null;
    $this->file = null;
    $this->dateSolved = '0-0-0';
    $this->idAdminSolved = null;
  }

  public function getPaymentConditions()
  {
    return $this->paymentConditions;
  }

  public function setPaymentConditions($paymentConditions)
  {
    $this->paymentConditions = $paymentConditions;
  }

  public function getValidity()
  {
    return $this->validity;
  }

  public function setValidity($validity)
  {
    $this->validity = $validity;
  }

  public function getDeliveryTime()
  {
    return $this->deliveryTime;
  }

  public function setDeliveryTime($deliveryTime)
  {
    $this->deliveryTime = $deliveryTime;
  }

  public function getIdAdminAssigned()
  {
    return $this->idAdminAssigned;
  }

  public function setIdAdminAssigned($idAdminAssigned)
  {
    $this->idAdminAssigned = $idAdminAssigned;
  }

  public function getDateAssigned()
  {
    return $this->dateAssigned;
  }

  public function setDateAssigned($dateAssigned)
  {
    $this->dateAssigned = $dateAssigned;
  }

  public function getIdAdminSolved()
  {
    return $this->idAdminSolved;
  }

  public function setIdAdminSolved($idAdminSolved)
  {
    $this->idAdminSolved = $idAdminSolved;
  }

  public function getDateSolved()
  {
    return $this->dateSolved;
  }

  public function setDateSolved($dateSolved)
  {
    $this->dateSolved = $dateSolved;
  }

  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }

  public function setSolved($solved)
  {
    $this->solved = $solved;
  }

  public function  isSolved()
  {
    return $this->solved;
  }

  public function getIdClient()
  {
    return $this->idClient;
  }

  public function setIdClient($idClient)
  {
    $this->idClient = $idClient;
  }

  public function getFile()
  {
    return $this->file;
  }

  public function setFile($file)
  {
    $this->file = $file;
  }

  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getExtraInformation()
  {
    return $this->extraInformation;
  }
  public function setExtraInformation($extraInformation)
  {
    $this->extraInformation = $extraInformation;
  }
  public function getNameClient()
  {
    return $this->nameClient;
  }

  public function setNameClient($nameClient)
  {
    $this->nameClient = $nameClient;
  }

  public function getLastNameClient()
  {
    return $this->lastNameClient;
  }

  public function setLastNameClient($lastNameClient)
  {
    $this->lastNameClient = $lastNameClient;
  }

  public function getCompany()
  {
    return $this->company;
  }

  public function setCompany($company)
  {
    $this->company = $company;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setAddress($address)
  {
    $this->address = $address;
  }

  public function getCity()
  {
    return $this->city;
  }

  public function setCity($city)
  {
    $this->city = $city;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  public function getCellphoneNumber()
  {
    return $this->cellphoneNumber;
  }

  public function setCellphoneNumber($cellphoneNumber)
  {
    $this->cellphoneNumber = $cellphoneNumber;
  }

  public function addItem($item)
  {
    $flag = false;
    foreach ($this->items as $itemArray) {
      if ($itemArray->isEqual($item)) {
        $itemArray->setQuantity($itemArray->getQuantity() + $item->getQuantity());
        $flag = true;
      }
    }
    if (!$flag) {
      array_push($this->items, $item);
    }
  }

  public function searchItem($idItem)
  {
    foreach ($this->items as $key => $item) {
      if ($item->getId() == $idItem) {
        return $key;
      }
    }
  }
  public function removeItem($idItem)
  {
    $index = $this->searchItem($idItem);
    if ($index !== false) {
      unset($this->items[$index]);
      var_dump($this->items);
      return true;
    } else {
      return false;
    }
  }
  public function calculateTotal()
  {
    $total = 0;
    foreach ($this->items as $item) {
      $total += $item->calculateTotal();
    }
    return $total;
  }
  public function jsonSerialize()
  {
    return get_object_vars($this);
  }
}
