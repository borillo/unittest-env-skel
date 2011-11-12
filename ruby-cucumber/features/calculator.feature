Feature: Calculator
   In order to add two numbers
   As a god
   I want to get the sum

   Scenario: Add two numbers
      Given I have entered 2 into the calculator
      And I have entered 5 into the calculator
      When I press add
      Then I get 7
