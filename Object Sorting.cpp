#include <iostream>
#include "arrays.h"
#include <vector>
using namespace std;
 
struct object{
	int column1;
	int column2;
	float column3;
};

const int length = 50;
int main(){ 	
char repeat = 'Y';
while(repeat == 'Y'){ 	
//Instance of class Object
 	object row;
 	
 	//Create an array that takes 50 objects
 	vector<object>table;
 		//create object elements by having one, two, three = the columns
 	for(int c = 0; c < length; c++){
 		row.column1 = arrayObjNum[c];
 		row.column2 = arrayObjLOC[c];
 		row.column3 = arrayLOCMet[c];
 		table.push_back(row);
	 }
	 
//Sort decision
int decision1 = 0;
cout << "(0) X" << endl;
cout << "(1) Y" << endl;
cout << "Order by: ";
cin >> decision1;
cout << endl;
if(!(decision1 == 1 || decision1 == 0)){
cout << "Invalid. Try again: ";
cin >> decision1;
}
cout << endl;

int decision2 = 0;
cout << "(0) Ascending" << endl;
cout << "(1) Descending" << endl;
cout << "List in: ";
cin >> decision2;
cout << endl;
if(!(decision2 == 0 || decision2 == 1)){
cout << "Invalid. Try again: ";
cin >> decision2;
}
cout << endl;

if(decision1 == 0 && decision2 == 0){
	if(length > 1){
 		for(int c = 1; c < length; c++){
 			int l = c - 1;
 			int l2 = c - 1;
 			int l3 = c - 1;
 			int key = table[c].column2;
 			int key2 = table[c].column1;
 			float key3 = table[c].column3;
 			while(l >= 0 && table[l].column2 > key){
 				table[l + 1].column2 = table[l].column2;
 				--l;
 				table[l2 + 1].column1 = table[l2].column1;
 				--l2;
 				table[l3 + 1].column3 = table[l3].column3;
 				--l3;
			}
 				table[l + 1].column2 = key;
 				table[l + 1].column1 = key2;
 				table[l + 1].column3 = key3;
		 }
	 }	
	 //DISPLAYS CONTENTS OF table vector
	cout << "#" << "	" << "X" << "	 " << "Y" << endl;
	cout << "--------------------" << endl;
	for(int c = 0; c < table.size(); c++){
		cout << table[c].column1 << "	";
		cout << table[c].column2 << "	";
		cout << table[c].column3 << "	" << endl;
	}
}
if(decision1 == 0 && decision2 == 1){
	if(length > 1){
 		for(int c = 1; c < length; c++){
 			int l = c - 1;
 			int l2 = c - 1;
 			int l3 = c - 1;
 			int key = table[c].column2;
 			int key2 = table[c].column1;
 			float key3 = table[c].column3;
 			while(l >= 0 && table[l].column2 > key){
 				table[l + 1].column2 = table[l].column2;
 				--l;
 				table[l2 + 1].column1 = table[l2].column1;
 				--l2;
 				table[l3 + 1].column3 = table[l3].column3;
 				--l3;
			}
 				table[l + 1].column2 = key;
 				table[l + 1].column1 = key2;
 				table[l + 1].column3 = key3;
		 }
	 }	
	 //DISPLAYS CONTENTS OF table vector
	cout << "#" << "	" << "X" << "	 " << "Y" << endl;
	cout << "--------------------" << endl;
	for(int c = length - 1; c >= 0; c--){
		cout << table[c].column1 << "	";
		cout << table[c].column2 << "	";
		cout << table[c].column3 << "	" << endl;
		}
}
if(decision1 == 1 && decision2 == 0){
	if(length > 1){
 		for(int c = 1; c < length; c++){
 			int l = c - 1;
 			int l2 = c - 1;
 			int l3 = c - 1;
 			float key = table[c].column3;
 			int key2 = table[c].column1;
 			int key3 = table[c].column2;
 			while(l >= 0 && table[l].column3 > key){
 				table[l + 1].column3 = table[l].column3;
 				--l;
 				table[l2 + 1].column1 = table[l2].column1;
 				--l2;
 				table[l3 + 1].column2 = table[l3].column2;
 				--l3;
			}
 				table[l + 1].column3 = key;
 				table[l + 1].column1 = key2;
 				table[l + 1].column2 = key3;
		 }
	 }	
	 //DISPLAYS CONTENTS OF table vector
	cout << "#" << "	" << "X" << "	 " << "Y" << endl;
	cout << "--------------------" << endl; 
	for(int c = 0; c < table.size(); c++){
		cout << table[c].column1 << "	";
		cout << table[c].column2 << "	";
		cout << table[c].column3 << endl;
		}	
}
if(decision1 == 1 && decision2 == 1){
	if(length > 1){
 		for(int c = 1; c < length; c++){
 			int l = c - 1;
 			int l2 = c - 1;
 			int l3 = c - 1;
 			float key = table[c].column3;
 			int key2 = table[c].column1;
 			int key3 = table[c].column2;
 			while(l >= 0 && table[l].column3 > key){
 				table[l + 1].column3 = table[l].column3;
 				--l;
 				table[l2 + 1].column1 = table[l2].column1;
 				--l2;
 				table[l3 + 1].column2 = table[l3].column2;
 				--l3;
			}
 				table[l + 1].column3 = key;
 				table[l + 1].column1 = key2;
 				table[l + 1].column2 = key3;
		 }
	 }	
	 //DISPLAYS CONTENTS OF table vector
	cout << "#" << "	" << "X" << "	 " << "Y" << endl;
	cout << "--------------------" << endl;
	for(int c = length - 1; c >= 0; c--){
		cout << table[c].column1 << "	";
		cout << table[c].column2 << "	";
		cout << table[c].column3 << "	" << endl;
		}
}
cout << "Continue? Y/N:";
cin >> repeat;
cout << endl;
if(!(repeat == 'Y' || repeat == 'N')){
	cout << "Invalid. Try again: ";
	cin >> repeat;
}
cout << endl;
}
 	
 	return 0;
}

//Insertion sort function

