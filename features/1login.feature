@GLOBAL
Feature: Login
As a director I want to ensure that only users with the correct access rights can access the system so that we maintain the security of the information held in the system
	
	Scenario: Logging in with correct credentials
		Given I am on the login page
		When I type "testadmin" into "username"
		And I type "Password1" into "password"
		And I click "Sign in"
		Then I am on the Homepage

	Scenario: Logging in with incorrect password
		Given I am on the login page
		When I type "admin" into "username"
		And I type "wrongpassword" into "password"
		And I click "Sign in"
		Then I see "Incorrect username or password" 
	
	Scenario: Logging in with incorrect username
		Given I am on the login page
		When I type "wrongusername" into "username"
		And I type "Password1" into "password"
		And I click "Sign in"
		Then I see "Incorrect username or password" 