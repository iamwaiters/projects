using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ZooObjects
{
    class Program
    {
        static void Main(string[] args)
        {
            Animals animal = new Animals();
            animal.Greet();
            Dog dog = new Dog();
            dog.Greet();
            Console.WriteLine(dog.Describe());
        }
    }
}
