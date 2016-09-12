class test  {
  public static void main(String[] args) {
    long t1 = 0;
    long t2 = 0;
    long a = 0;
    t1 = System.currentTimeMillis();
    while(true){
      a += 1;
      if(a >= 100000000)
        break;
    }
    t2 = System.currentTimeMillis();
    System.out.println(t2 - t1);
  }
}
