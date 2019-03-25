    import utest.Runner;
    import utest.ui.Report;
    
    class RunAll {
    	static public function main() {
    		trace("runAll");
    
    		var runner = new Runner();
    		 runner.addCase(new TestMots());
    
    		
			Report.create(runner); // breaks
    		//new utest.ui.text.PrintReport(runner); //ok
            //new utest.ui.text.HtmlReport(runner, true);
    		runner.run();
    	}
    }
