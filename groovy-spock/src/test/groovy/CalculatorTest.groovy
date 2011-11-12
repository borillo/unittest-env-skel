import spock.lang.*

class CalculatorTest extends spock.lang.Specification 
{
    def calculator = new Calculator()

    def "should add two number"() 
    {
        expect:
        calculator.add(2, 3) == 5
    }

    def "should add two number II"()
    {
        when:
        calculator.add(2, 3)

        then:
        5
    }
}       
