#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main()
{
    string s;

    ifstream fin ("C:\\Users\\студент\\Desktop\\Сайт.html");
    string line;
    string result = "";

    if (fin.is_open())
    {
        while (getline(fin, line))
        {
            if (line == "<h1></h1>") {
                result += "<h1>Сайт чата</h1>";
            }
            else {
                result += line;
            }
            result += "\n";
        }
    }
    
    fin.close();

    ofstream fout("C:\\Users\\студент\\Desktop\\Сайт2.html");
    fout << result;
    fout.close();
}
