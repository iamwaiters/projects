using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Shapes
{
    class buildshape
    {
        // instance variables

        protected int length;
        protected int width;
        protected int height;
        protected int shape_base;
        protected int diagonal_1;
        protected int semp;
        // ConsoleKeyInfo key;
        // key = Console.ReadKey(true);
        bool done = false;
        int iRight = 0;





        // 4 constructors that accept different variables
         public buildshape() { }

        public buildshape(int a, int b)
        {
            length = a;
            width = b;
        }

        public buildshape(int c, int d, int e)
        {
            length = c;
            width = d;
            height = e;
        }

        public buildshape(int f, int g, int h, int i)
        {
            length = f;
            width = g;
            height = h;
            shape_base = i;

        }
        public buildshape(int f, int g, int h, int i, int j, int k)
        {
            length = f;
            width = g;
            height = h;
            shape_base = i;
            diagonal_1 = j;
            semp = k;
        }
        // Get Sets for instance variables (validation methods may be required)
        public int Length
        {
            get
            {
                return length;
            }
            set
            {
                length = (value < 0) ? 0 : value;
            }
        }
        public int Width
        {
            get
            {
                return width;
            }
            set
            {
                width = (value < 0) ? 0 : value;
            }
        }
        public int Height
        {
            get
            {
                return height;
            }
            set
            {
                height = (value < 0) ? 0 : value; ;
            }
        }
        public int Shape_base
        {
            get
            {
                return shape_base;
            }
            set
            {
                shape_base = (value < 0) ? 0 : value;
            }
        }
        public int Diagonal_1
        {
            get
            {
                return diagonal_1;
            }
            set
            {
                diagonal_1 = (value < 0) ? 0 : value;
            }
        }
        public int Semp
        {
            get
            {
                return semp;
            }
            set
            {
                semp = (value < 0) ? 0 : value;
            }
        }





        ~buildshape()
        {
            //menu_display(0);
        }


        public void menu_display()
        {


            simple_shapes s1 = new simple_shapes();
            Complex c1 = new Complex();

            Console.WriteLine("Welcome to my new application to help calculate the");
            Console.WriteLine("area of diferent shapes.");
            Console.WriteLine("Please select the shape that you would like to");
            Console.WriteLine("calculate the area of.");
            Console.WriteLine("#1 - Square");
            Console.WriteLine("#2 - Rectangle");
            Console.WriteLine("#3 - Parallelogram");
            Console.WriteLine("#4 - Trapezoid");
            Console.WriteLine("#5 - Quadrilateral");
            Console.WriteLine("Type #6 to exit applcation");
            iRight = Convert.ToInt16(Console.ReadLine());
            while (done == false)
            {


                switch (iRight)
                {



                    case 1:
                        Console.WriteLine("Please enter the length of the square");
                        length = Convert.ToInt16(Console.ReadLine());
                        Console.WriteLine("Please enter the width of the square");
                        width = Convert.ToInt16(Console.ReadLine());
                        s1.Square(length, width);
                        iRight = 0;
                        break;




                    case 2:

                        Console.WriteLine("Please enter the length of the Rectangle");
                        length = Convert.ToInt16(Console.ReadLine());
                        Console.WriteLine("Please enter the width of the Rectangle");
                        width = Convert.ToInt16(Console.ReadLine());
                        s1.rectangle(length, width);
                        iRight = 0;
                        break;

                    case 3:
                        Console.WriteLine("Please enter the base of the Parallelgram");
                        shape_base = Convert.ToInt16(Console.ReadLine());
                        Console.WriteLine("Please enter the height of the Parallelgram");
                        height = Convert.ToInt16(Console.ReadLine());
                        c1.Parallelgram(shape_base, height);
                        iRight = 0;
                        break;

                    case 4:
                        Console.WriteLine("Please enter the length 1 of the Trapezoid");
                        length = Convert.ToInt16(Console.ReadLine());
                        Console.WriteLine("Please enter the length 2 of the Trapezoid");
                        diagonal_1 = Convert.ToInt16(Console.ReadLine());
                        Console.WriteLine("Please enter the height of the Trapezoid");
                        height = Convert.ToInt16(Console.ReadLine());
                        c1.Trapezoid(length, diagonal_1, height);
                        iRight = 0;
                        break;


                    case 5:
                        Console.WriteLine("Please enter the side 1 of the Quadrilateral");
                        length = Convert.ToInt16(Console.ReadLine());
                        Console.WriteLine("Please enter the side 2 of the Quadrilateral");
                        width = Convert.ToInt16(Console.ReadLine());
                        Console.WriteLine("Please enter the side 3 of the Quadrilateral");
                        height = Convert.ToInt16(Console.ReadLine());
                        Console.WriteLine("Please enter the side 4 of the Quadrilateral");
                        shape_base = Convert.ToInt16(Console.ReadLine());
                        c1.Quadrilateral(length, width, height, shape_base);
                        iRight = 0;
                        break;
                    case 6:
                        Console.WriteLine("Thank you for using my application");
                        done = true;
                        
                        break;

                    default:
                        //(key.Key == ConsoleKey.Escape)
                        Console.WriteLine("Thank you for using my application");
                        done = true;
                        break;
                }
            }

            //Console.WriteLine("Thank you for using my application");
        }
    }
}
