using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace Column_HeaderTest
{
    class Program
    {
        static void Main(string[] args)
        {
            string screenLine1 = "How many times will line1 print!";
            string person1str = "Art Divider goes Here!!!";

            int person1 = 1;
            int person2 = 10;
            int person3 = 3;
            int person4 = 7;
            bool one = true;
            bool two = false;
            bool three = true;
            bool four = false;

            List<bool> DivValidate = new List<bool>();
            List<int> SampleValidate = new List<int>();

            SampleValidate.Add(person1);
            SampleValidate.Add(person2);
            SampleValidate.Add(person3);
            SampleValidate.Add(person4);
            DivValidate.Add(one);
             DivValidate.Add(two);
             DivValidate.Add(three);
             DivValidate.Add(four);

            Console.WriteLine("Sample Header");

            int x = 0;
            foreach(int sample in SampleValidate)
            {
                if(DivValidate[x] == true)
                {
                   for(int i = 0; i < sample; i++)
                        {
                            Console.WriteLine(screenLine1);
                        }
                    Console.WriteLine(person1str);

                }
                x++;
            }
            Console.WriteLine("Tray Divider");
        }
    }
}
