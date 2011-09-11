public class Problem2 {
    // 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

    public static void main(String[] args)
    {
        int twoAgo = 1;
        int oneAgo = 2;
        int next = 3;
        int total = 2; // start total at two since we are summing evens, and 2 isn't part of loop
        int highestFibNumber = 4000000;
        
        System.out.print(twoAgo + " " + oneAgo);
        do {
            // print the remainder of the Fibonacci sequence
            next = twoAgo + oneAgo;
            twoAgo = oneAgo;
            oneAgo = next;
            System.out.print(" " + next);
            
            if (next % 2 == 0) {
                // number is even, let's sum it
                total = total + next;
            }
        
        } while (next < highestFibNumber);
        System.out.print("\r\n" + "Answer: " + total + "\r\n");
    }
}