import java.util.Scanner;

public class CovidAssess {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("COVID-19 Risk Self-assessment Program");
        System.out.println("######################################################################");
        System.out.println("What is your name?");
        String name = sc.nextLine();
        System.out.println("Are you (M)ale or (F)emale?");
        String sex = sc.nextLine();
        System.out.println("Are you married? (Y)es or (N)o?");
        String isMarried = sc.nextLine();
        System.out.println("How old are you?");
        int age = sc.nextInt();
        System.out.println("######################################################################");
        System.out.println();
        System.out.println("Please kindly answer the following questions:");
        System.out.println();
        String[] ans = new String[4];
        System.out.println(
                "1. Have you recently traveled to an area with known local spread of COVID-19? (Y)es or (N)o?");
        sc.nextLine();
        ans[0] = sc.nextLine();
        System.out.println(
                "2. Have you come into close contact (within 6 feet) with someone who has a laboratory confirmed COVID-19 diagnosis in the past 14 days? (Y)es or (N)o?");
        ans[1] = sc.nextLine();
        System.out.println(
                "3. Do you have a fever (greater than 100.4 F or 38.0 C) OR symptoms of lower respiratory illness such as cough, shortness of breath, difficulty breathing or sore throat? (Y)es or (N)o?");
        ans[2] = sc.nextLine();
        System.out.println(
                "4. Are you a first responder, healthcare worker, or employee or attendee of a child or adult care facility? (Y)es or (N)o?");
        ans[3] = sc.nextLine();
        System.out.println();
        int score = 0;
        for (int i = 0; i < ans.length; i++) {
            switch (ans[i]) {
                case "Y":
                    score++;
                    break;
            }
        }
        System.out.println("######################################################################");
        System.out.println();
        String salutation;
        if (sex == "M" && age > 25) {
            salutation = "Mr. ";
        } else if (sex == "F" && age > 25 && isMarried == "N") {
            salutation = "Miss ";
        } else if (sex == "F" && age > 25 && isMarried == "Y") {
            salutation = "Mrs. ";
        } else {
            salutation = "";
        }
        int spcIdx = name.indexOf(" ");
        String lastName = name.substring(spcIdx + 1, name.length());
        System.out.println("Dear " + salutation + lastName + ",");
        String rec;
        if (score >= 3) {
            rec = "You may need COVID-19 testing.";
        } else if (score == 2) {
            if (ans[2] == "Y") {
                rec = "You may need COVID-19 testing.";
            } else if (ans[0] == "Y" && ans[1] == "Y") {
                rec = "Self-quarantine at home.";
            } else {
                rec = "Your symptoms may or may not be related to COVID-19.";
            }
        } else if (score == 1) {
            if (ans[0] == "Y" && ans[1] == "Y") {
                rec = "Self-quarantine at home.";
            } else if (ans[2] == "Y") {
                rec = "Your symptoms may or may not be related to COVID-19.";
            } else {
                rec = "Practice social distancing and watch for symptoms.";
            }
        } else {
            rec = "Practice social distancing and watch for symptoms.";
        }
        System.out.println();
        System.out.println("Our recommendation is:");
        System.out.println(rec);
        System.out.println();
        System.out.println("Be safe!");
        System.out.println("Thank you.");
        System.out.println("######################################################################");
    }
}
