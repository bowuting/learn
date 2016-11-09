#include "stdio.h"
#include "time.h"

int main(void){
int a = 0;
clock_t start,end;

start = clock();

 while(1){
    a += 1;
    if(a >= 100000000)
    break;
  }
end = clock();

printf("%f\n", (double)end-start);


  return 0;
}
