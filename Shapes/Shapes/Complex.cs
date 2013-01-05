using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Shapes
{
    class Complex : buildshape
    {
        private double Area;


        public double area
        {
            get
            {
                return Area;
            }
            set
            {
                Area = value;
            }
        }

        public int semiperimeter()
        {
            semp = (base.Length + base.Width + base.Height + base.Shape_base) / 2;
            return semp;
        }
        public void Parallelgram(int a, int b)
        {
            base.Length = a;
            base.Width = b;
            Area = base.length * base.width;
            Console.WriteLine("The area of the Parallelgram is {0}", Area);
        }

        public void Trapezoid(int a, int b, int c)
        {
            base.Length = a;
            base.Height = b;
            base.Diagonal_1 = c;
            Area = base.length + base.diagonal_1 / 2 * base.height;
            Console.WriteLine("The area of the Trapezoid is {0}", Area);
        }

        public void Quadrilateral(int a, int b, int c, int d)
        {
            // formula Sqrt( (s - a) (s - b)(s-c)  s=(a + b + c + d)/2
            // pull function that calculates S
            Area = Math.Sqrt((semiperimeter() - base.Length) * (semiperimeter() - base.Width) * (semiperimeter() - base.Height) * (semiperimeter() - base.Shape_base));

            Console.WriteLine("The area of the Quadrilateral is {0}", Area);
        }
    }
}
