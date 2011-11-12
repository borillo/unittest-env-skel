require 'calculator'

describe Calculator do
  before(:each) do
     @calculator = Calculator.new
  end

  it "should add two numbers" do
     add_result = @calculator.add 2, 1

     add_result.should equal 3
  end
end
