require 'life'

describe Life do
  before(:each) do
     @life = Life.new
  end

  it "should rock" do
     result = @life.rocks?

     result.should == "rocks"
  end
end
