using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ZooObjects
{
    class Dog : FourLeggedAnimal
    {
        public void Greet()
        {
            Console.WriteLine("Hello I'm a dog!");
        }

        public override string Describe()
        {
            string result = base.Describe();
            result += " In fact, it's a dog!";
            return result;
        }
    }
}
