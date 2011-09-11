public class Problem1 {

    public static void main(String[] args)
    {
        int fizzbuzzCount = 0;
        
        for(int i=0; i<1000; i++)
        {
            if(i%3 == 0 || i%5 == 0)
            {
                fizzbuzzCount += i;
            }
        }
        System.out.println(fizzbuzzCount);
    }
}