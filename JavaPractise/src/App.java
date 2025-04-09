class Recursion {

    public void printNuM(int num) {
        if (num == 1) {
            System.out.println(num);
            return;
        }
        System.out.print(num + " ");
        printNuM(num - 1);
    }
}

public class App {
    public static void main(String[] args) throws Exception {
        System.out.println("Hello, World!");
        int n = 10;
        Recursion newRe = new Recursion();
        newRe.printNuM(n);
    }
}
