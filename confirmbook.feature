Feature: Confirm inventory
  In order to confirm inventory
  As a admin
 

  Scenario: view booked
	Given I click Konfirmasi Barang
	Give I click Edit
	And the data should be appear 
	When i type all data that required
	Then I succesfully confirm the inventory