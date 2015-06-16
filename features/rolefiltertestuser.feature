Feature: Testing the role filter
	In order to prove the filters work
	As an user
	I need the steps to be added to the right context

	Scenario: Login in
		Given I am logged in
		Then I don't see the "Unit Queue" link in the "#queue_selector" element