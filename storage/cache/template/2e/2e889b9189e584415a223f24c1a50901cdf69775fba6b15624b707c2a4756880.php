<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/information/ionizer.twig */
class __TwigTemplate_51df290f98240657c206991cfc3ac53e09216f37524e799a610b6b75a274d26a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<style>
  .season_tabs {
    position: relative;
    min-height: 600px;
    /* This part sucks */
    clear: both;
    margin: 25px 0;
  }

  .season_tab {
    float: left;
    clear: both;
    width: 286px;
  }

  .season_tab label {
    background: #eee;
    padding: 10px;
    border: 1px solid #ccc;
    margin-left: -1px;
    font-size: 21px;
    vertical-align: middle;
    position: relative;
    left: 1px;
    width: 264px;
    height: 68px;
    display: table-cell;
  }

  .season_tab [type=radio] {
    display: none;
  }

  .season_content {
    position: absolute;
    top: 0;
    left: 286px;
    background: white;
    right: 0;
    bottom: 0;
    padding: 20px;
    border: 1px solid #ccc;
    overflow-y: scroll;
  }

  .season_content span {
    animation: 0.5s ease-out 0s 1 slideInFromTop;
  }

  [type=radio]:checked~label {
    background: white;
    border-bottom: 2px solid #8bc34a;
    z-index: 2;
  }

  [type=radio]:checked~label~.season_content {
    z-index: 1;
  }
</style>
<!-- breadcrumb area start -->
<div class=\"breadcrumb-area\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"breadcrumb-wrap\">
          <nav aria-label=\"breadcrumb\">
            <ul class=\"breadcrumb\">
                <ul class=\"breadcrumb\">
                  ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 71
            echo "                  <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 71);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 71);
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </ul>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb area end -->
<div class=\"container\">
  <!-- contact area start -->
  <div class=\"contact-area section-padding pt-20\">
    <div class=\"container\">
      <h2>WATER IONIZER</h2>
      <div class=\"row\">
        <div class=\"col-12\">
          <div class=\"season_tabs\">

            <div class=\"season_tab\">
              <input type=\"radio\" id=\"tab-1\" name=\"tab-group-1\" checked>
              <label for=\"tab-1\">Alkaline Water</label>

              <div class=\"season_content\">

                <h3>Brief History</h3>
                <p>Electrolyzed reduced water (ERW) and BIOCERAMIC (Natural) process is the most common term in the scientific literature. Both has an alkaline pH (8-10) and contains molecular hydrogen. Water ionizers were invented in the early 1900’s. Research on electrolyzed water started around 1931 in Japan where it gained popularity in the 1950’s. Around this time, the water was touted as having “healing effects” and was called “shin nooru solution” or “synnohl liquid”. In 1962, separate water ionizer companies (one from Nagano Prefecture and the other from Kyoto Prefecture) brought the electrolytic apparatus to the Cabinet Welfare Bureau (equivalent to the Japanese Ministry of Health, Labor, and Welfare [JMHLW]) and applied to manufacture the apparatus as a medical device.</p>
                <h3>Medical Approval</h3>
                <p>However, because some tap waters didn’t have sufficient minerals for efficient electrolysis, it was impossible to produce alkaline water with the same characteristics. Adding calcium lactate to the water solved this problem and allowed an alkaline pH to be produced. With addition of calcium lactate as a prerequisite, approval for a “synnohl liquid manufacturing apparatus” was granted in 1965 and recognized as being a “medical substance generator” under the Pharmaceutical Affairs Law as follows: Cathode Water (Alkaline Ionized Water): • o Drinking alkaline ionized water is effective against chronic diarrhea, indigestion, abnormal stomach or intestine fermentation, acid control, and acid indigestion. The JMHLW also approved the mildly and strongly acidic waters as medical substance. In 1978 the Korean FDA also approved these devices for similar reasons. The approval process follow virtually the identical criteria and standards as was developed by Japan. Some of suggested that the approvals are totally different, and that Japanese approvals require extensive testing, even clinical trials and up to 5 years or more of vigorous investigations.</p>
                <h3>Skepticism And Marketing</h3>
                <p>Development of water electrolysis apparatuses continued, and in 1979, a continuous-type electrolytic water generator, which could be directly connected to the tap water, was approved. Shortly thereafter, water filters were added to these machines, and the marketing of alkaline ionized water started to be common. In June of 1992, a television news program marketed alkaline ionized water as “Wonder Water”. This was a marketing strategy, which showed the water being used in hospitals and giving beneficial effects against diseases, such as diabetes. The media led people to believe that the water was recognized for ailments beyond what it had been approved for. However, because the original approval required addition of calcium lactate, and calcium was already recognized to help with gastrointestinal issues including chronic diarrhea, antacids, and indigestion, the medical community doubted the efficacy of the water itselfas the benefits could easily be ascribed to the calcium. In December of 1992, product testing by the National Consumer Affairs Center of Japan further cast doubt on the efficacy of the water reporting that it was unrealistic to believe that drinking alkaline water can have similar affects to gastrointestinal drugs, as it would require one to drink more than 10 liters of water to neutralize the stomach acid.</p>
                <h3>Verification Of Benefits</h3>
                <p>In 1993, a double-blind clinical study (193 people) conducted by the medical school of Kyoto University reported that there was no statistically significant improvement in the gastrointestinal symptoms of those drinking the alkaline ionized water, but a slight trend of improvement was observed. When the Drugs, Cosmetics, and Medical Instruments Act of Japan was revised in 2005, a device for the ERW production was re-authorized as a home managed medical device for the improvement of gastrointestinal symptoms.</p>
                <h3>Current Medical Status</h3>
                <p>Currently, in order to manufacture and/or sell water ionizers, companies must obtain certified approval by the JMHLW according the Pharmaceutical Affairs Law. Actually if a device makes water with a pH of 8.5 or higher then it must obtain the approval. The device is inspected to assure safety and ability to produce alkaline water (e.g. pH ? 9.5) according to the JIS-T 2004 performance test method. ¬This is similar to the American FDA, in requiring products like dental floss, examination gloves, wheel chairs, etc.). After meeting the requirements, an approval number is granted. Commercial products must show this approval number. There are at least eighteen different water ionizer companies that have been approved and certified by the JMHLW. Because all machines must comply with the same requirements for medical approval, the products have the same basic electrolytic cell structure as well as the same basic principles of electrolysis, so there are no significant differences between the various machines in terms of platinum purity design. However, the concentration of dissolved hydrogen and the level of maintenance required (or that is possible) can vary significantly.</p>
                <h3>Marketing Prohibitions</h3>
                <p>In Japan the Pharmaceutical Affairs law has also issued strict prohibitions regarding marketing, advertising, and making claims. For example, the names of ERW produced from ionizers must not suggest beneficial effects (e.g. Wonder Water, magical water, etc.). Advertising claims must not exceed or suggest more than those for which it was approved. The fact that these units have been classified as medical devices do not offer any evidence for their potential to treat and or prevent disease. It has also been claimed that the majority of hospitals in Japan use and prescribe ionized water to their patients, but this is also not true. Many medical doctors in Japan have never seen or even heard of a water ionizer being used for hospital patients. There was an early Japanese advertisement that made it appear that this was the case, but it is not.</p>

              </div>
            </div>

            <div class=\"season_tab\">
              <input type=\"radio\" id=\"tab-2\" name=\"tab-group-1\">
              <label for=\"tab-2\">Abstract</label>

              <div class=\"season_content\">
                <p>Hydrogen is #1 on the periodic table because it is tiny. Being tiny allows Hydrogen to get into membranes, joints, brain, gut, organs, lungs, eyes, ears, etc. Molecular or diatomic hydrogen is 2 atoms of hydrogen. It is also referred to as H2.<br>
                  In the Echo® Hydrogen Enriched Water System™, H2 gas is dissolved in the water. The water is the delivery vehicle for the H2 gas which has benefits. Molecular hydrogen (H2) is why water electrolysis was developed in 1800. H2 is a selective antioxidant only reacting with ROS (reactive oxygen species). ROS damages cells. The most cytotoxic (cell damaging) ROS (free radicals) are Hydroxyl Radicals (HO*). When H2 combines with 2 hydroxyl radicals, 2 water molecule are formed. H2 has therapeutic benefits for every organ in the body. Our bodies were designed to create hydrogen gas in the gut through the normal fermentation and digestion of food. The problem is that many people have issues that prevent their gut from working correctly. 60% of the immune system is based on gut health. If the gut is compromised and the diet does not have beneficial fiber to be converted into hydrogen gas, issues occur.</p>
                <h3>Some Benefits Of Molecular Hydrogen:</h3>
                <ul>
                  <li>Reduction of oxidative stress and Inflammation.</li>
                  <li>Regulation of over 200 Biomolecules in the body.</li>
                  <li>Stimulates gastric ghrelin to increase cognitive function</li>
                  <li>Stimulation of anaerobic microflora in the intestinal tract.</li>
                  <li>Shown to help with Rheumatoid Arthritis and joint issues.</li>
                  <li>700 studies showing therapeutic effects with 170 human disease models.</li>
                </ul>
                <p>Molecular hydrogen has benefits. Peer reviewed articles and studies have shown molecular hydrogen to reduce oxidative stress and inflammation which lead to many diseases. Studies have been conducted on 170+ human diseases and conditions including Rheumatoid Arthritis, Diabetes, Colon Cancer, Autoimmune, Parkinson’s, Alzheimer’s, Autism, Bipolar, Schizophrenia, &amp; IGT. In addition to helping with existing conditions, molecular hydrogen can support the body to avoid susceptibility to diseases and conditions. It is truly one of the best anti-aging tools you can use.</p>
                <h3><strong>Water Electrolysis: A Hydrogen Generator: How It Works.</strong></h3>
                <p>In 1800, Anthony Carlisle, a surgeon in London, discovered water electrolysis because he wanted to make a hydrogen generator. Dr. Carlisle wanted a way to produce hydrogen gas easily because he learned in 1798 that hydrogen had antioxidant properties. Traditional electrolysis devises convert water (H2O) to hydrogen gas (H2) and hydroxide ions (OH-) at the negative side (cathode), and oxygen gas (O2) and hydrogen ions (H+) at the positive side (anode). Traditional water electrolysis machines have standard membranes that separates the alkaline OH- ions from the acidic H+ ions if you are separating the water streams. A new method of electrolysis was designed to only produce H2 without changing the pH of the source water. In this method, the water is not separated into alkaline and acid streams. Proton Exchange Membranes (PEM) are used instead of standard membranes. The advantage of the PEM is that it creates its own conductivity in water and can produce H2 gas even in pure water with no minerals as in reverse osmosis or distilled water. The benefits do not come from the pH of the water. The pH change comes if you separate the water streams. It is the H2 gas that can be dissolved in the water that provides the therapeutic benefits. Typically, electrolysis systems that separate the water streams into alkaline and acid water are not able to dissolve H2 gas in the water longer than a few weeks. This is because the positively charged minerals naturally want to bond to the negatively charged cathode (see graphic above). If minerals build up on the cathode, H2 gas will not be dissolved in the water because the hydrogen bubbles will be too large to be dissolved. The H2 gas will go into the atmosphere and the benefits with it. In the Echo® 9 Ultra H2 system, the patented technology changes the polarity of the electrodes every time the machine is used. This makes it impossible for minerals to build up. This is the only system that guarantees H2 gas will always be dissolved in the water. With other electrolysis systems, minerals will build up within 2-3 weeks of use and the benefits will be gone. Other companies tell consumers that they have automatic reverse cleaning systems in their machines to be confusing. They say that their systems change the polarity of the electrodes to further confuse the issue but they don’t do it every time the machine is used. They only change the polarity every 10L or 20L of water and by then the minerals are already bonded and the damage is done. With these inferior systems, the only way to keep the minerals off the cathode is to clean the system every 2 weeks with citric acid or commercial vinegar. Of course, you don’t have to worry about this with any of the Echo® branded systems because it impossible for the minerals to bond to the cathode in the first place.</p>
                <h3><strong>Benefits Of Echo® Hydrogen Enriched Water™</strong></h3>
                <p>Everyone is talking about how free radicals are damaging our cells. What most people don’t know is that many free radicals are beneficial to health. It is only the cell damaging (cytotoxic) oxygen radicals that we need to scavenge. H2 converts these cell damaging radicals into water molecules.</p>
                <h3>Athletic Performance:</h3>
                <p>Echo® Hydrogen Enriched Water™ has helped many athletes increase performance. It better empowers you to function at optimal efficiency by ridding the cells of Hydroxyl Radicals allowing the mitochondria to produce energy more efficiently. It reduces fatigue by lessening lactate buildup in muscles. Recovery times can be cut in half. When a person is properly hydrated with Echo® hydrogen-enriched water, they perform at peak levels for longer periods of time.</p>
                <h3>Detoxification And Weight Loss:</h3>
                <p>Echo® water supports healthy cleansing and weight loss. When the toxins and wastes are flushed, the burden on the body is lessened. Water can also help to clean out the intestines and colon. People feel more hydrated, have more success with their weight loss programs, experience more productive sleep, wake up more alert, have fewer allergy symptoms, and generally feel more energy throughout the day. H2 stimulates gastric Ghrelin that increases cognitive function.</p>
                <h3>Immune Boost:</h3>
                <p>The effectiveness of the immune system and the digestive system are directly linked to the level of hydration. Being properly hydrated is one of the best ways to increase your immune system and prevent sickness and disease. 60-75% of your body is water and it should be no surprise that the type of water you drink can directly influences the way you feel. Hydrogen enriched water™ can stimulate anaerobic microflora to naturally restore gut health. The health of your gut is directly related to the strength of your immune system and the susceptibility to disease and sickness.</p>
                <h3>Intrinsic Energy And Frequencies:</h3>
                <p>Many people understand that energy and frequencies are all around us. Radio frequencies, cell phone frequencies, Infrared energies, EMF’s, etc. There are good and bad energies and frequencies. Some use energies to benefit individuals in need. The Echo® Water System has hundreds of beneficial energies and frequencies. They can protect you from harmful frequencies and energies. They can also balance chakras and help the body heal. Individuals that are intuitive can feel them. Others say that the water just feels good to them. Professionals in energy medicine, Cranial Sacral Therapists, Reiki Masters, etc. love and recommend Echo® water because of these beneficial energies and frequencies.</p>
                <h3>Proper Hydration:</h3>
                <p>Because Echo® Water tastes so great, you will be drinking more water. A study3 conducted by the University of Utah, showed the more water you drink the better. In the study, subjects consumed either 4, 8 or 12 glasses of water daily. On the fifth day before rising, their hydration status was monitored and a computer measured how many calories they had burned in a resting state. The groups who drank 8 and 12 glasses of water daily were sufficiently hydrated, whereas subjects who drank only four glasses showed definite signs of dehydration. The well-hydrated subjects reported better concentration and more<br>
                  energy. They burned more calories at rest than the group who drank only 4 glasses. These results were in line with previous3 University of Utah findings that the ability to burn calories can decline by about 2% per day when people are dehydrated. Metabolic rate and digestion are increased by being properly hydrated.</p>
                <h3>Increased Cognitive Function – Ghrelin: Help With Neurological Conditions</h3>
                <p>Studies show that H2 gas stimulates Ghrelin secretions. Ghrelin is known as the hunger hormone in the body. Ghrelin affects many things in the body including cognitive function, hunger, weight regulation, anti-inflammatory function. This is accomplished in the hippocampus, hypothalamus and the brain stem. Specific studies have shown that water with H2 gas can be helpful with neurologic issues like Parkinson’s, Alzheimer’s, Bipolar, Schizophrenia, and Autism.</p>
                <h3><strong>Study References:</strong></h3>
                <p>There are hundreds of studies showing molecular hydrogen to have therapeutic benefits. The studies below are shared for educational purposes only. They are not shared to indicate any expected outcome for anyone with a similar or same disease or pathology. The results achieved in the studies should not be taken as an indicator of results you will experience. The study shows potential outcomes. There are no protocols, drugs, natural methods, or techniques that are 100% effective. Every individual is different and diseases are complex.</p>
                <h3>Hydrogen–Water Enhances 5-Fluorouracil-Induced Inhibition Of Colon Cancer</h3>
                <p>Runtuwene et al. (2015), Hydrogen–water enhances 5-fluorouracil-induced inhibition of colon cancer. PeerJ 3:e859; DOI 10.7717/peerj.859. 2015 April 7<br>
                  Joshua Runtuwene1,2, Haruka Amitani1, Marie Amitani1, Akihiro Asakawa1, Kai-Chun Cheng1 and Akio Inui1<br>
                  1 Department of Psychosomatic Internal Medicine, Kagoshima University Graduate School of Medical and Dental Sciences, Kagoshima, Japan 2 Faculty of Medicine, Sam Ratulangi University, Manado, Indonesia</p>
                <h3>ABSTRACT</h3>
                <p>Oxidative stress is involved in cancer development. Hydrogen (H2) is a potent antioxidant and exhibits anti-inflammatory and potentially anticancer-like activities. This study aimed to investigate the role of H2 in combination with 5-fluorouracil (5-FU) in cancer treatment both in vitro and in vivo using the colon 26 cell line. The survival rate was determined using the Kaplan–Meier survival test, and cell viability was assessed using cell viability imaging kit and the MTT assay, and activation of the cell apoptosis pathway (Phosphorylated adenosine monophosphate activated protein kinase (p-AMPK), Apoptosis-inducing factor (AIF) and Caspase 3) were characterized by western blots. Hydrogen water administration improved the survival of mice with colon 26-induced cancer. Furthermore, hydrogen water enhanced cell apoptosis in cancer cells, resulting in a marked increase in the expression of p-AMPK, AIF and Caspase 3 in colon 26 cells. Hydrogen water also increased the inhibitory effect of 5-FU on colon 26 cells with respect to cell survival rate and anticancer functions. Additionally, high-content hydrogen water exhibited stronger ant oxidative and anticancer activity than did the natural hydrogen water. In conclusion, high-content hydrogen water can inhibit colon cancer, particularly in combination with 5-fluorouracil.</p>
                <h3>Supplementation Of Hydrogen-Rich Water Improves Lipid And Glucose Metabolism In Patients With Type 2 Diabetes Or Impaired Glucose Tolerance</h3>
                <p><strong>Nutr Res, 2008 Mar;28(3):137-43. doi:10.1016/j.nutres.2008.01.008.</strong></p>
                <p>Kajiyama S, Hasegawa G, Asano M, Hosoda H, Fukui M, Nakamura N, Kitawaki J, Imai S, Nakano K, Ohta M, Adachi T, Obayashi H, Yoshikawa T<br>
                  Oxidative stress is recognized widely as being associated with various disorders including diabetes, hypertension, and atherosclerosis. It is well established that hydrogen has a reducing action. We therefore investigated the effects of hydrogen-rich water intake on lipid and glucose metabolism in patients with either type 2 diabetes mellitus (T2DM) or impaired glucose tolerance (IGT). We performed a randomized, double-blind, placebo-controlled, crossover study in 30 patients with T2DM controlled by diet and exercise therapy and 6 patients with IGT. The patients consumed either 900 mL/d of hydrogen-rich pure water or 900 mL of placebo pure water for 8 weeks, with a 12-week washout period. Several biomarkers of oxidative stress, insulin resistance, and glucose metabolism, assessed by an oral glucose tolerance test, were evaluated at baseline and at 8 weeks. Intake of hydrogen-rich water was associated with significant decreases in the levels of modified low-density lipoprotein (LDL) cholesterol (ie, modifications that increase the net negative charge of LDL), small dense LDL, and urinary 8-isoprostanes by 15.5% (P b .01), 5.7% (P b .05), and 6.6% (P b .05), respectively. Hydrogen-rich water intake was also associated with a trend of decreased serum concentrations of oxidized LDL and free fatty acids, and increased plasma levels of adiponectin and extracellular-superoxide dismutase. In 4 of 6 patients with IGT, intake of hydrogen-rich water normalized the oral glucose tolerance test. In conclusion, these results suggest that supplementation with hydrogen-rich water may have a beneficial role in prevention of T2DM and insulin resistance.</p>
                <h3>Selective Stimulation Of The Growth Of Anaerobic Microflora In The Human Intestinal Tract By Electrolyzed Reducing Water.</h3>
                <p>96-99% of the “friendly” or residential microflora of intestinal tract of humans consists of strict anaerobes and only 1-4% of aerobes. Many diseases of the intestine are due to a disturbance in the balance of the microorganisms inhabiting the gut. The treatment of such diseases involves the restoration of the quantity and/or balance of residential microflora in the intestinal tract. It is known that aerobes and anaerobes grow at different oxidation-reduction potentials (ORP). The former require positive E(h) values up to +400 mV. Anaerobes do not grow unless the E(h) value is negative between -300 and -400 mV. In this work, it is suggested that prerequisite for the recovery and maintenance of obligatory anaerobic microflora in the intestinal tract is a negative<br>
                  ORP value of the intestinal milieu. Electrolyzed reducing water with E(h) values between 0 and -300 mV produced in electrolysis devices possesses this property. Drinking such water favors the growth of residential microflora in the gut. A sufficient array of data confirms this idea. However, most researchers explain the mechanism of its action by an antioxidant properties destined to detox the oxidants in the gut and other host tissues. Evidence is presented in favor of the hypothesis that the primary target for electrolyzed reducing water is the residential microflora in the gut.</p>
                <h3>Pilot Study: Effects Of Drinking Hydrogen-Rich Water On Muscle Fatigue Caused By Acute Exercise In Elite Athletes</h3>
                <p>Kosuke Aoki1, Atsunori Nakao2*, Takako Adachi1, Yasushi Matsui1 and Shumpei Miyakawa1</p>
                <p><strong>Abstract</strong><br>
                  Background: Muscle contraction during short intervals of intense exercise causes oxidative stress, which can play a role in the development of overtraining symptoms, including increased fatigue, resulting in muscle microinjury or inflammation. Recently it has been said that hydrogen can function as antioxidant, so we investigated the effect of hydrogen-rich water (HW) on oxidative stress and muscle fatigue in response to acute exercise. Methods: Ten male soccer players aged 20.9 ± 1.3 years old were subjected to exercise tests and blood sampling. Each subject was examined twice in a crossover double-blind manner; they were given either HW or placebo water (PW) for one week intervals. Subjects were requested to use a cycle ergometer at a 75 % maximal oxygen uptake (VO2) for 30 min, followed by measurement of peak torque and muscle activity throughout 100 repetitions of maximal isokinetic knee extension. Oxidative stress markers and creatine kinase in the peripheral blood were sequentially measured.</p>
                <p><strong>Results</strong>: Although acute exercise resulted in an increase in blood lactate levels in the subjects given PW, oral intake of HW prevented an elevation of blood lactate during heavy exercise. Peak torque of PW significantly decreased during maximal isokinetic knee extension, suggesting muscle fatigue, but peak torque of HW didn’t decrease at early phase. There was no significant change in blood oxidative injury markers (d-ROMs and BAP) or creatine kinease after exercise.<br>
                  <strong>Conclusion</strong>: Adequate hydration with hydrogen-rich water pre-exercise reduced blood lactate levels and improved exercise-induced decline of muscle function. Although further studies to elucidate the exact mechanisms and the benefits are needed to be confirmed in larger series of studies, these preliminary results may suggest that HW may be suitable hydration for athletes.
                </p>
                <h3>Effectiveness Of Hydrogen Rich Water On Antioxidant Status Of Subjects With Potential Metabolic Syndrome</h3>
                <p>Atsunori Nakao1,*, Yoshiya Toyoda1, Prachi Sharma2, Malkanthi Evans2 and Najla Guthrie2<br>
                  1 Heart, Lung and Esophageal Surgery Institute, Department of Surgery, University of Pittsburgh Medical Center, Pittsburgh, PA, 15213, USA, 2 KGK Synergize, Inc., London, ON, postal code, Canada, N6A 5R8<br>
                  Published online 24 February, 2010</p>
                <p><strong>Summary</strong>:<br>
                  Metabolic syndrome is characterized by cardio metabolic risk factors that include obesity, insulin resistance, hypertension and dyslipidemia. Oxidative stress is known to play a major role in the pathogenesis of metabolic syndrome. The objective of this study was to examine the effectiveness of hydrogen rich water (1.5–2 L/day) in an open label, 8-week study on 20 subjects with potential metabolic syndrome. Hydrogen rich water was produced, by placing a metallic magnesium stick into drinking water (hydrogen concentration; 0.55–0.65 mM), by the following chemical reaction; Mg + 2H2O → Mg (OH)2 + H2. The consumption of hydrogen rich water for 8 weeks resulted in a 39% increase (p&lt;0.05) in antioxidant enzyme superoxide dismutase (SOD) and a 43% decrease (p&lt;0.05) in thiobarbituric acid reactive substances (TBARS) in urine. Further, subjects demonstrated an 8% increase in high density lipoprotein (HDL)-cholesterol and a 13% decrease in total cholesterol/HDL-cholesterol from baseline to week 4. There was no change in fasting glucose levels during the 8 week study. In conclusion, drinking hydrogen rich water represents a potentially novel therapeutic and preventive strategy for metabolic syndrome.</p>
              </div>
            </div>

            <div class=\"season_tab\">
              <input type=\"radio\" id=\"tab-3\" name=\"tab-group-1\">
              <label for=\"tab-3\">Acidic Water</label>

              <div class=\"season_content\">

                <h3>Brief History</h3>
                <p>Electrolyzed reduced water (ERW) and BIOCERAMIC (Natural) process is the most common term in the scientific literature. Both has an alkaline pH (8-10) and contains molecular hydrogen. Water ionizers were invented in the early 1900’s. Research on electrolyzed water started around 1931 in Japan where it gained popularity in the 1950’s. Around this time, the water was touted as having “healing effects” and was called “shin nooru solution” or “synnohl liquid”. In 1962, separate water ionizer companies (one from Nagano Prefecture and the other from Kyoto Prefecture) brought the electrolytic apparatus to the Cabinet Welfare Bureau (equivalent to the Japanese Ministry of Health, Labor, and Welfare [JMHLW]) and applied to manufacture the apparatus as a medical device.</p>
                <h3>Medical Approval</h3>
                <p>However, because some tap waters didn’t have sufficient minerals for efficient electrolysis, it was impossible to produce alkaline water with the same characteristics. Adding calcium lactate to the water solved this problem and allowed an alkaline pH to be produced. With addition of calcium lactate as a prerequisite, approval for a “synnohl liquid manufacturing apparatus” was granted in 1965 and recognized as being a “medical substance generator” under the Pharmaceutical Affairs Law as follows: Cathode Water (Alkaline Ionized Water): • o Drinking alkaline ionized water is effective against chronic diarrhea, indigestion, abnormal stomach or intestine fermentation, acid control, and acid indigestion. The JMHLW also approved the mildly and strongly acidic waters as medical substance. In 1978 the Korean FDA also approved these devices for similar reasons. The approval process follow virtually the identical criteria and standards as was developed by Japan. Some of suggested that the approvals are totally different, and that Japanese approvals require extensive testing, even clinical trials and up to 5 years or more of vigorous investigations.</p>
                <h3>Skepticism And Marketing</h3>
                <p>Development of water electrolysis apparatuses continued, and in 1979, a continuous-type electrolytic water generator, which could be directly connected to the tap water, was approved. Shortly thereafter, water filters were added to these machines, and the marketing of alkaline ionized water started to be common. In June of 1992, a television news program marketed alkaline ionized water as “Wonder Water”. This was a marketing strategy, which showed the water being used in hospitals and giving beneficial effects against diseases, such as diabetes. The media led people to believe that the water was recognized for ailments beyond what it had been approved for. However, because the original approval required addition of calcium lactate, and calcium was already recognized to help with gastrointestinal issues including chronic diarrhea, antacids, and indigestion, the medical community doubted the efficacy of the water itselfas the benefits could easily be ascribed to the calcium. In December of 1992, product testing by the National Consumer Affairs Center of Japan further cast doubt on the efficacy of the water reporting that it was unrealistic to believe that drinking alkaline water can have similar affects to gastrointestinal drugs, as it would require one to drink more than 10 liters of water to neutralize the stomach acid.</p>
                <h3>Verification Of Benefits</h3>
                <p>In 1993, a double-blind clinical study (193 people) conducted by the medical school of Kyoto University reported that there was no statistically significant improvement in the gastrointestinal symptoms of those drinking the alkaline ionized water, but a slight trend of improvement was observed. When the Drugs, Cosmetics, and Medical Instruments Act of Japan was revised in 2005, a device for the ERW production was re-authorized as a home managed medical device for the improvement of gastrointestinal symptoms.</p>
                <h3>Current Medical Status</h3>
                <p>Currently, in order to manufacture and/or sell water ionizers, companies must obtain certified approval by the JMHLW according the Pharmaceutical Affairs Law. Actually if a device makes water with a pH of 8.5 or higher then it must obtain the approval. The device is inspected to assure safety and ability to produce alkaline water (e.g. pH ? 9.5) according to the JIS-T 2004 performance test method. ¬This is similar to the American FDA, in requiring products like dental floss, examination gloves, wheel chairs, etc.). After meeting the requirements, an approval number is granted. Commercial products must show this approval number. There are at least eighteen different water ionizer companies that have been approved and certified by the JMHLW. Because all machines must comply with the same requirements for medical approval, the products have the same basic electrolytic cell structure as well as the same basic principles of electrolysis, so there are no significant differences between the various machines in terms of platinum purity design. However, the concentration of dissolved hydrogen and the level of maintenance required (or that is possible) can vary significantly.</p>
                <h3>Marketing Prohibitions</h3>
                <p>In Japan the Pharmaceutical Affairs law has also issued strict prohibitions regarding marketing, advertising, and making claims. For example, the names of ERW produced from ionizers must not suggest beneficial effects (e.g. Wonder Water, magical water, etc.). Advertising claims must not exceed or suggest more than those for which it was approved. The fact that these units have been classified as medical devices do not offer any evidence for their potential to treat and or prevent disease. It has also been claimed that the majority of hospitals in Japan use and prescribe ionized water to their patients, but this is also not true. Many medical doctors in Japan have never seen or even heard of a water ionizer being used for hospital patients. There was an early Japanese advertisement that made it appear that this was the case, but it is not.</p>

              </div>
            </div>
            <div class=\"season_tab\">
              <input type=\"radio\" id=\"tab-4\" name=\"tab-group-1\">
              <label for=\"tab-4\">Diseases VS Hydrogen</label>

              <div class=\"season_content\">
                <p>Mildly acidic water is produced from water ionizers, which use the process of electrolysis. Acidic water is produced at the positive electrode (anode). The Japanese Ministry of Health, Labor, and Welfare (JMHLW) approved this water in 1965, as an astringent for beauty purposes.</p>
                <p>The JMHLW also approved the alkaline and strongly acidic waters as medical substance.</p>
                <h3>Claimed Benefits Of Mildly Acidic Water</h3>
                <p>The mildly acidic water (pH 4-6), also known as “beauty water” is touted to have benefits as an astringent for beauty and cosmetology. However, no specific article testing electrolyzed mildly acidic water could be located. Nevertheless, because skin surface pH is about 6 ± 0.6 it follows that slightly acidic water would not perturb the pH homeostasis of the skin. Indeed, alkaline water can increase surface pH of the skin leading to irritation by disrupting the physiological protective ‘acid mantle’. It may also alter the cutaneous bacterial flora, alter the activity of enzymes in the upper epidermis and decrease fat from the skin, which may influence hydrating status leading to dry squamous skin. However, no article that directly tests the application of mildly acidic water to skin could be located to substantiate the purported benefits. It appears that there are studies in Japanese, however. Astringencies are generally tannins, organic molecules and chemical salts that cause shrinkage of mucous membranes; all ingredients not contained in mildly acidic water.</p>
                <h4>chlorine in acidic water</h4>
                <p>Unfortunately, the mildly acidic water often contains chlorine (produced during electrolysis) and thus becomes a dilute hypochlorous acid solution. Most commercial units filter the chlorine (Cl2) out of the water before it undergoes electrolysis, but the common chloride electrolytes are not removed. These chloride ions (Cl-) are oxidized at the anode to produce chlorine: (2Cl- ? Cl2 +2e-). Chlorine in the acidic water can easily be detected with a simple chlorine test reagent. Some have incorrectly claimed that even though tests for chlorine in the acidic water show positive, the results are invalid as though the indicator measured something else and gave a false positive. This is misleading and false as chlorine production via electrolysis is the preferred method of mass production, and the chlorine indicators are selectively sensitive to chlorine. Thus caution should be exercised regarding the topical application of acidic water to the skin. Indeed chlorinated water negatively effects skin health. One should first test the acidic water for the presence of chlorine before topical administration.</p>
              </div>
            </div>

            <div class=\"season_tab\">
              <input type=\"radio\" id=\"tab-5\" name=\"tab-group-1\">
              <label for=\"tab-5\">Echo Hydrogen Water</label>

              <div class=\"season_content\">

                <h3>Brief History</h3>
                <p>Electrolyzed reduced water (ERW) and BIOCERAMIC (Natural) process is the most common term in the scientific literature. Both has an alkaline pH (8-10) and contains molecular hydrogen. Water ionizers were invented in the early 1900’s. Research on electrolyzed water started around 1931 in Japan where it gained popularity in the 1950’s. Around this time, the water was touted as having “healing effects” and was called “shin nooru solution” or “synnohl liquid”. In 1962, separate water ionizer companies (one from Nagano Prefecture and the other from Kyoto Prefecture) brought the electrolytic apparatus to the Cabinet Welfare Bureau (equivalent to the Japanese Ministry of Health, Labor, and Welfare [JMHLW]) and applied to manufacture the apparatus as a medical device.</p>
                <h3>Medical Approval</h3>
                <p>However, because some tap waters didn’t have sufficient minerals for efficient electrolysis, it was impossible to produce alkaline water with the same characteristics. Adding calcium lactate to the water solved this problem and allowed an alkaline pH to be produced. With addition of calcium lactate as a prerequisite, approval for a “synnohl liquid manufacturing apparatus” was granted in 1965 and recognized as being a “medical substance generator” under the Pharmaceutical Affairs Law as follows: Cathode Water (Alkaline Ionized Water): • o Drinking alkaline ionized water is effective against chronic diarrhea, indigestion, abnormal stomach or intestine fermentation, acid control, and acid indigestion. The JMHLW also approved the mildly and strongly acidic waters as medical substance. In 1978 the Korean FDA also approved these devices for similar reasons. The approval process follow virtually the identical criteria and standards as was developed by Japan. Some of suggested that the approvals are totally different, and that Japanese approvals require extensive testing, even clinical trials and up to 5 years or more of vigorous investigations.</p>
                <h3>Skepticism And Marketing</h3>
                <p>Development of water electrolysis apparatuses continued, and in 1979, a continuous-type electrolytic water generator, which could be directly connected to the tap water, was approved. Shortly thereafter, water filters were added to these machines, and the marketing of alkaline ionized water started to be common. In June of 1992, a television news program marketed alkaline ionized water as “Wonder Water”. This was a marketing strategy, which showed the water being used in hospitals and giving beneficial effects against diseases, such as diabetes. The media led people to believe that the water was recognized for ailments beyond what it had been approved for. However, because the original approval required addition of calcium lactate, and calcium was already recognized to help with gastrointestinal issues including chronic diarrhea, antacids, and indigestion, the medical community doubted the efficacy of the water itselfas the benefits could easily be ascribed to the calcium. In December of 1992, product testing by the National Consumer Affairs Center of Japan further cast doubt on the efficacy of the water reporting that it was unrealistic to believe that drinking alkaline water can have similar affects to gastrointestinal drugs, as it would require one to drink more than 10 liters of water to neutralize the stomach acid.</p>
                <h3>Verification Of Benefits</h3>
                <p>In 1993, a double-blind clinical study (193 people) conducted by the medical school of Kyoto University reported that there was no statistically significant improvement in the gastrointestinal symptoms of those drinking the alkaline ionized water, but a slight trend of improvement was observed. When the Drugs, Cosmetics, and Medical Instruments Act of Japan was revised in 2005, a device for the ERW production was re-authorized as a home managed medical device for the improvement of gastrointestinal symptoms.</p>
                <h3>Current Medical Status</h3>
                <p>Currently, in order to manufacture and/or sell water ionizers, companies must obtain certified approval by the JMHLW according the Pharmaceutical Affairs Law. Actually if a device makes water with a pH of 8.5 or higher then it must obtain the approval. The device is inspected to assure safety and ability to produce alkaline water (e.g. pH ? 9.5) according to the JIS-T 2004 performance test method. ¬This is similar to the American FDA, in requiring products like dental floss, examination gloves, wheel chairs, etc.). After meeting the requirements, an approval number is granted. Commercial products must show this approval number. There are at least eighteen different water ionizer companies that have been approved and certified by the JMHLW. Because all machines must comply with the same requirements for medical approval, the products have the same basic electrolytic cell structure as well as the same basic principles of electrolysis, so there are no significant differences between the various machines in terms of platinum purity design. However, the concentration of dissolved hydrogen and the level of maintenance required (or that is possible) can vary significantly.</p>
                <h3>Marketing Prohibitions</h3>
                <p>In Japan the Pharmaceutical Affairs law has also issued strict prohibitions regarding marketing, advertising, and making claims. For example, the names of ERW produced from ionizers must not suggest beneficial effects (e.g. Wonder Water, magical water, etc.). Advertising claims must not exceed or suggest more than those for which it was approved. The fact that these units have been classified as medical devices do not offer any evidence for their potential to treat and or prevent disease. It has also been claimed that the majority of hospitals in Japan use and prescribe ionized water to their patients, but this is also not true. Many medical doctors in Japan have never seen or even heard of a water ionizer being used for hospital patients. There was an early Japanese advertisement that made it appear that this was the case, but it is not.</p>

              </div>
            </div>

            <div class=\"season_tab\">
              <input type=\"radio\" id=\"tab-6\" name=\"tab-group-1\">
              <label for=\"tab-6\">Healing Water contains Molecular Hydrogen</label>

              <div class=\"season_content\">
                <p>Mildly acidic water is produced from water ionizers, which use the process of electrolysis. Acidic water is produced at the positive electrode (anode). The Japanese Ministry of Health, Labor, and Welfare (JMHLW) approved this water in 1965, as an astringent for beauty purposes.</p>
                <p>The JMHLW also approved the alkaline and strongly acidic waters as medical substance.</p>
                <h3>Claimed Benefits Of Mildly Acidic Water</h3>
                <p>The mildly acidic water (pH 4-6), also known as “beauty water” is touted to have benefits as an astringent for beauty and cosmetology. However, no specific article testing electrolyzed mildly acidic water could be located. Nevertheless, because skin surface pH is about 6 ± 0.6 it follows that slightly acidic water would not perturb the pH homeostasis of the skin. Indeed, alkaline water can increase surface pH of the skin leading to irritation by disrupting the physiological protective ‘acid mantle’. It may also alter the cutaneous bacterial flora, alter the activity of enzymes in the upper epidermis and decrease fat from the skin, which may influence hydrating status leading to dry squamous skin. However, no article that directly tests the application of mildly acidic water to skin could be located to substantiate the purported benefits. It appears that there are studies in Japanese, however. Astringencies are generally tannins, organic molecules and chemical salts that cause shrinkage of mucous membranes; all ingredients not contained in mildly acidic water.</p>
                <h4>chlorine in acidic water</h4>
                <p>Unfortunately, the mildly acidic water often contains chlorine (produced during electrolysis) and thus becomes a dilute hypochlorous acid solution. Most commercial units filter the chlorine (Cl2) out of the water before it undergoes electrolysis, but the common chloride electrolytes are not removed. These chloride ions (Cl-) are oxidized at the anode to produce chlorine: (2Cl- ? Cl2 +2e-). Chlorine in the acidic water can easily be detected with a simple chlorine test reagent. Some have incorrectly claimed that even though tests for chlorine in the acidic water show positive, the results are invalid as though the indicator measured something else and gave a false positive. This is misleading and false as chlorine production via electrolysis is the preferred method of mass production, and the chlorine indicators are selectively sensitive to chlorine. Thus caution should be exercised regarding the topical application of acidic water to the skin. Indeed chlorinated water negatively effects skin health. One should first test the acidic water for the presence of chlorine before topical administration.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact area end -->
  <br /><br />
</div>
";
        // line 257
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/information/ionizer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 257,  124 => 73,  113 => 71,  109 => 70,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/ionizer.twig", "");
    }
}
