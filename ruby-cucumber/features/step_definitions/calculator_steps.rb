$:.unshift(File.dirname(__FILE__) + '/../../lib')
require 'calculator'

Before do
  @calculator = Calculator.new
  @operands = []
end

Given /^I have entered (\d+) into the calculator$/ do |operand|
  @operands << operand.to_i
end

When /^I press add$/ do
  @result = @calculator.add @operands[0], @operands[1]
end

Then /^I get (\d+)$/ do |result|
  @result.should == result.to_i
end
