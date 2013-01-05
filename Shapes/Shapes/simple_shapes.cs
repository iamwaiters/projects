using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Shapes
{
    class simple_shapes : buildshape
    {
        private int Area;


        // constructor pulling info from base contructor
        public simple_shapes() { }
        public simple_shapes(int Length, int Width, int Shape_base)
            : base(Length, Width, Shape_base)
        {

        }
        // add get set statements as needed
        public int area
        {
            get
            {
                return Area;
            }
            set
            {

                Area = (value < 0) ? 0 : value;
            }
        }

        public void rectangle(int a, int b)
        {
            length = a;
            width = b;
            Area = Length * Width;
            Console.WriteLine("The area of the rectangle is {0}", Area);

        }

        public void Square(int a, int b)
        {
            length = a;
            width = b;
            Area = length * width;
            Console.WriteLine("The area of the Square is {0}", Area);
        }
        public void Parallelgram(int a, int b)
        {
            length = a;
            shape_base = b;
            Area = length * shape_base;
            Console.WriteLine("The area of the Parallelgram is {0}", Area);
        }
    }
}
