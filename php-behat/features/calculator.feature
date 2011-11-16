Feature: Calculator
  In order to sum two numbers
  As a user
  I want to get the sum

  Scenario: Sum two numbers
    Given I have entered 2 into the calculator
    And I have entered 3 into the calculator
    When I run "sum"
    Then I should get 5
