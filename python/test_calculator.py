import unittest

class Calculator:
   def add(self, left, right):
       return left+right

   def minus(self, left, right):
       return left-right

class CalculatorTest(unittest.TestCase):
   def setUp(self):
       self.calculator = Calculator()

   def test_can_add(self):
       self.assertEquals(5, self.calculator.add(2, 3))

   def test_can_minus(self):
       self.assertEquals(3, self.calculator.minus(5, 2))

if __name__ == '__main__':
  unittest.main()
