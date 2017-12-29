Feature: edit data
  In order to edit my profle
  As a customer 
  I need to input some data that required in web

  Scenario: Edit data
	Given I click edit profile
	When I type all data that required
	Then I click save
	And the data be sorted to database
