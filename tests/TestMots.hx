import haxe.Utf8;
import haxe.io.Path;
import utest.Assert;
using Lambda;
class TestMots implements utest.ITest {
    public function new() {}

	static var fileName = "Caâpture d’écra🐠n 2019-02ù-04 à 17.27.05.pngCapâtuærèëe d’écrāan 2019-02-04 à 17.27.05.png";

	public function testtest() {
		trace("yo");
		utest.Assert.isTrue(1 == 1);
	}

	public function testUnderClean() {
		var str = Mots.underclean(fileName);
		Assert.equals("Caapture_d_ecra_n_2019_02u_04_a_17_27_05_pngCapatuaereee_d_ecraan_2019_02_04_a_17_27_05_png", str,"not safe emoji");
	}

    public function testcleanFile(){
        var str = Mots.cleanFile(fileName);
trace( "strrrr"+str);
		Assert.equals("CaaptureDEcran201902u04A172705PngCapatuaereeeDEcraan20190204A172705.png", str);
        Assert.equals("png",Mots.getExtension(str));
    }
    public function testCleanAccents(){
        var str = Mots.cleanAccents(fileName);
		Assert.equals("Caapture d’ecra🐠n 2019-02u-04 a 17.27.05.pngCapatuaereee d’ecraan 2019-02-04 a 17.27.05.png", str);
    }
    

    public function testCapitalize()
    {
       var str= "david";
       Assert.equals("David",Mots.capitalize(str));
    }

    public function testCleanPath()
    {
       var str= "..//david/Zelote//magali/lupin.jpg//";
       Assert.equals("../david/Zelote/magali/lupin.jpg",Mots.cleanPath(str));
    }

    public function testEndWith()
    {
       Assert.isTrue(Mots.endsWith( "pur","r"));
    }

    public function firstWord()
    {
    Assert.equals( "je",Mots.firstWord("je suis une vache")) ; 
    }

    public function testCamel()
    {
     var str= "je suis une vache";
     str=Mots.camelize(str);
     Assert.equals("jeSuisUneVache",str); 
    }

    public function testContain()
    {
         Assert.isTrue(Mots.contains("bonjour","j"));
    }

    public function testExtension(){
        var files=["one.png","two.tar.gz",".htaccess","four.jpeg"];
        files.map(
            function(n){
                Assert.equals(Path.extension(n),Mots.getExtension(n));
                return null; ///for php
            }
        );
    }

    public function testunCamel()
    {
       var str= "jeSuisUneVache";
        str=Mots.unCamel(str);
        Assert.equals("je suis une vache",str); 
    }

   

    public function testMatchEmoj()
    {
        var hallo= "👽😬hallowe🐬en";
        Assert.isTrue(Mots.matchEmoj(hallo));
    }

     public function testStripEmoj()
    {
       var hallo= "👽😬hallowe🐬en";
       Assert.equals("halloween",Mots.stripEmoj(hallo));
    }

    public function testBetweenchars(){
        var str="bim_bam_boum";
        Assert.equals("bam",Mots.betweenChars(str,"_"));
        

    }

    public function testDifferentBetweenchars(){
        var str="./www/uploads/thumb/Screen_ateliernuenSlip.png";
        Assert.equals("Screen",Mots.betweenDiffChars(str,"/","_"));
        

    }

    //ensure they are different
    public function testGuid(){
        var p=[];
        for ( a in 0...10){
            p.push(Guid.generate());   
        }
        p.mapi(function(i,n){
            for (m in 0...p.length){ 
                if( m!=i){ //not same index
                var gu=p[m];
                trace( 'n=$n gu=$gu $i');
                Assert.isTrue(gu!=n);
                }
            }
            return n;
        });
        
    }
    
}
