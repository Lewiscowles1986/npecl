<?php
declare(strict_types=1);

namespace Lewiscowles\Npecl\Dtos;

enum License: string {
    // Add other licenses as necessary
    case ZERO_BSD = '0BSD';
    case AAL = 'AAL';
    case ABSTYLES = 'Abstyles';
    case ADACORE_DOC = 'AdaCore-doc';
    case ADOBE_2006 = 'Adobe-2006';
    case ADOBE_DISPLAY_POSTSCRIPT = 'Adobe-Display-PostScript';
    case ADOBE_GLYPH = 'Adobe-Glyph';
    case ADOBE_UTOPIA = 'Adobe-Utopia';
    case ADSL = 'ADSL';
    case AFL_1_1 = 'AFL-1.1';
    case AFL_1_2 = 'AFL-1.2';
    case AFL_2_0 = 'AFL-2.0';
    case AFL_2_1 = 'AFL-2.1';
    case AFL_3_0 = 'AFL-3.0';
    case AFMPARSE = 'Afmparse';
    case AGPL_1_0 = 'AGPL-1.0';
    case AGPL_1_0_ONLY = 'AGPL-1.0-only';
    case AGPL_1_0_OR_LATER = 'AGPL-1.0-or-later';
    case AGPL_3_0 = 'AGPL-3.0';
    case AGPL_3_0_ONLY = 'AGPL-3.0-only';
    case AGPL_3_0_OR_LATER = 'AGPL-3.0-or-later';
    case ALADDIN = 'Aladdin';
    case AMDPLPA = 'AMDPLPA';
    case AML = 'AML';
    case AML_GLSLANG = 'AML-glslang';
    case AMPAS = 'AMPAS';
    case ANTLR_PD = 'ANTLR-PD';
    case ANTLR_PD_FALLBACK = 'ANTLR-PD-fallback';
    case APACHE_1_0 = 'Apache-1.0';
    case APACHE_1_1 = 'Apache-1.1';
    case APACHE_2_0 = 'Apache-2.0';
    case APAFML = 'APAFML';
    case APL_1_0 = 'APL-1.0';
    case APP_S2P = 'App-s2p';
    case APSL_1_0 = 'APSL-1.0';
    case APSL_1_1 = 'APSL-1.1';
    case APSL_1_2 = 'APSL-1.2';
    case APSL_2_0 = 'APSL-2.0';
    case ARPHIC_1999 = 'Arphic-1999';
    case ARTISTIC_1_0 = 'Artistic-1.0';
    case ARTISTIC_1_0_CL8 = 'Artistic-1.0-cl8';
    case ARTISTIC_1_0_PERL = 'Artistic-1.0-Perl';
    case ARTISTIC_2_0 = 'Artistic-2.0';
    case ASWF_DIGITAL_ASSETS_1_0 = 'ASWF-Digital-Assets-1.0';
    case ASWF_DIGITAL_ASSETS_1_1 = 'ASWF-Digital-Assets-1.1';
    case BAEKMUK = 'Baekmuk';
    case BAHYPH = 'Bahyph';
    case BARR = 'Barr';
    case BEERWARE = 'Beerware';
    case BITSTREAM_CHARTER = 'Bitstream-Charter';
    case BITSTREAM_VERA = 'Bitstream-Vera';
    case BITTORRENT_1_0 = 'BitTorrent-1.0';
    case BITTORRENT_1_1 = 'BitTorrent-1.1';
    case BLESSING = 'blessing';
    case BLUEOAK_1_0_0 = 'BlueOak-1.0.0';
    case BOEHM_GC = 'Boehm-GC';
    case BORCEUX = 'Borceux';
    case BRIAN_GLADMAN_3_CLAUSE = 'Brian-Gladman-3-Clause';
    case BSD_1_CLAUSE = 'BSD-1-Clause';
    case BSD_2_CLAUSE = 'BSD-2-Clause';
    case BSD_2_CLAUSE_FREEBSD = 'BSD-2-Clause-FreeBSD';
    case BSD_2_CLAUSE_NETBSD = 'BSD-2-Clause-NetBSD';
    case BSD_2_CLAUSE_PATENT = 'BSD-2-Clause-Patent';
    case BSD_2_CLAUSE_VIEWS = 'BSD-2-Clause-Views';
    case BSD_3_CLAUSE = 'BSD-3-Clause';
    case BSD_3_CLAUSE_ATTRIBUTION = 'BSD-3-Clause-Attribution';
    case BSD_3_CLAUSE_CLEAR = 'BSD-3-Clause-Clear';
    case BSD_3_CLAUSE_FLEX = 'BSD-3-Clause-flex';
    case BSD_3_CLAUSE_HP = 'BSD-3-Clause-HP';
    case BSD_3_CLAUSE_LBNL = 'BSD-3-Clause-LBNL';
    case BSD_3_CLAUSE_MODIFICATION = 'BSD-3-Clause-Modification';
    case BSD_3_CLAUSE_NO_MILITARY_LICENSE = 'BSD-3-Clause-No-Military-License';
    case BSD_3_CLAUSE_NO_NUCLEAR_LICENSE = 'BSD-3-Clause-No-Nuclear-License';
    case BSD_3_CLAUSE_NO_NUCLEAR_LICENSE_2014 = 'BSD-3-Clause-No-Nuclear-License-2014';
    case BSD_3_CLAUSE_NO_NUCLEAR_WARRANTY = 'BSD-3-Clause-No-Nuclear-Warranty';
    case BSD_3_CLAUSE_OPEN_MPI = 'BSD-3-Clause-Open-MPI';
    case BSD_3_CLAUSE_SUN = 'BSD-3-Clause-Sun';
    case BSD_4_CLAUSE = 'BSD-4-Clause';
    case BSD_4_CLAUSE_SHORTENED = 'BSD-4-Clause-Shortened';
    case BSD_4_CLAUSE_UC = 'BSD-4-Clause-UC';
    case BSD_4_3RENO = 'BSD-4.3RENO';
    case BSD_4_3TAHOE = 'BSD-4.3TAHOE';
    case BSD_ADVERTISING_ACKNOWLEDGEMENT = 'BSD-Advertising-Acknowledgement';
    case BSD_ATTRIBUTION_HPND_DISCLAIMER = 'BSD-Attribution-HPND-disclaimer';
    case BSD_INFERNO_NETTVERK = 'BSD-Inferno-Nettverk';
    case BSD_PROTECTION = 'BSD-Protection';
    case BSD_SOURCE_CODE = 'BSD-Source-Code';
    case BSD_SYSTEMICS = 'BSD-Systemics';
    case BSL_1_0 = 'BSL-1.0';
    case BUSL_1_1 = 'BUSL-1.1';
    case BZIP2_1_0_5 = 'bzip2-1.0.5';
    case BZIP2_1_0_6 = 'bzip2-1.0.6';
    case C_UDA_1_0 = 'C-UDA-1.0';
    case CAL_1_0 = 'CAL-1.0';
    case CAL_1_0_COMBINED_WORK_EXCEPTION = 'CAL-1.0-Combined-Work-Exception';
    case CALDERA = 'Caldera';
    case CATOSL_1_1 = 'CATOSL-1.1';
    case CC_BY_1_0 = 'CC-BY-1.0';
    case CC_BY_2_0 = 'CC-BY-2.0';
    case CC_BY_2_5 = 'CC-BY-2.5';
    case CC_BY_2_5_AU = 'CC-BY-2.5-AU';
    case CC_BY_3_0 = 'CC-BY-3.0';
    case CC_BY_3_0_AT = 'CC-BY-3.0-AT';
    case CC_BY_3_0_DE = 'CC-BY-3.0-DE';
    case CC_BY_3_0_IGO = 'CC-BY-3.0-IGO';
    case CC_BY_3_0_NL = 'CC-BY-3.0-NL';
    case CC_BY_3_0_US = 'CC-BY-3.0-US';
    case CC_BY_4_0 = 'CC-BY-4.0';
    case CC_BY_NC_1_0 = 'CC-BY-NC-1.0';
    case CC_BY_NC_2_0 = 'CC-BY-NC-2.0';
    case CC_BY_NC_2_5 = 'CC-BY-NC-2.5';
    case CC_BY_NC_3_0 = 'CC-BY-NC-3.0';
    case CC_BY_NC_3_0_DE = 'CC-BY-NC-3.0-DE';
    case CC_BY_NC_4_0 = 'CC-BY-NC-4.0';
    case CC_BY_NC_ND_1_0 = 'CC-BY-NC-ND-1.0';
    case CC_BY_NC_ND_2_0 = 'CC-BY-NC-ND-2.0';
    case CC_BY_NC_ND_2_5 = 'CC-BY-NC-ND-2.5';
    case CC_BY_NC_ND_3_0 = 'CC-BY-NC-ND-3.0';
    case CC_BY_NC_ND_3_0_DE = 'CC-BY-NC-ND-3.0-DE';
    case CC_BY_NC_ND_3_0_IGO = 'CC-BY-NC-ND-3.0-IGO';
    case CC_BY_NC_ND_4_0 = 'CC-BY-NC-ND-4.0';
    case CC_BY_NC_SA_1_0 = 'CC-BY-NC-SA-1.0';
    case CC_BY_NC_SA_2_0 = 'CC-BY-NC-SA-2.0';
    case CC_BY_NC_SA_2_0_DE = 'CC-BY-NC-SA-2.0-DE';
    case CC_BY_NC_SA_2_0_FR = 'CC-BY-NC-SA-2.0-FR';
    case CC_BY_NC_SA_2_0_UK = 'CC-BY-NC-SA-2.0-UK';
    case CC_BY_NC_SA_2_5 = 'CC-BY-NC-SA-2.5';
    case CC_BY_NC_SA_3_0 = 'CC-BY-NC-SA-3.0';
    case CC_BY_NC_SA_3_0_DE = 'CC-BY-NC-SA-3.0-DE';
    case CC_BY_NC_SA_3_0_IGO = 'CC-BY-NC-SA-3.0-IGO';
    case CC_BY_NC_SA_4_0 = 'CC-BY-NC-SA-4.0';
    case CC_BY_ND_1_0 = 'CC-BY-ND-1.0';
    case CC_BY_ND_2_0 = 'CC-BY-ND-2.0';
    case CC_BY_ND_2_5 = 'CC-BY-ND-2.5';
    case CC_BY_ND_3_0 = 'CC-BY-ND-3.0';
    case CC_BY_ND_3_0_DE = 'CC-BY-ND-3.0-DE';
    case CC_BY_ND_4_0 = 'CC-BY-ND-4.0';
    case CC_BY_SA_1_0 = 'CC-BY-SA-1.0';
    case CC_BY_SA_2_0 = 'CC-BY-SA-2.0';
    case CC_BY_SA_2_0_UK = 'CC-BY-SA-2.0-UK';
    case CC_BY_SA_2_1_JP = 'CC-BY-SA-2.1-JP';
    case CC_BY_SA_2_5 = 'CC-BY-SA-2.5';
    case CC_BY_SA_3_0 = 'CC-BY-SA-3.0';
    case CC_BY_SA_3_0_AT = 'CC-BY-SA-3.0-AT';
    case CC_BY_SA_3_0_DE = 'CC-BY-SA-3.0-DE';
    case CC_BY_SA_3_0_IGO = 'CC-BY-SA-3.0-IGO';
    case CC_BY_SA_4_0 = 'CC-BY-SA-4.0';
    case CC_PDDC = 'CC-PDDC';
    case CC0_1_0 = 'CC0-1.0';
    case CDDL_1_0 = 'CDDL-1.0';
    case CDDL_1_1 = 'CDDL-1.1';
    case CDL_1_0 = 'CDL-1.0';
    case CDLA_PERMISSIVE_1_0 = 'CDLA-Permissive-1.0';
    case CDLA_PERMISSIVE_2_0 = 'CDLA-Permissive-2.0';
    case CDLA_SHARING_1_0 = 'CDLA-Sharing-1.0';
    case CECILL_1_0 = 'CECILL-1.0';
    case CECILL_1_1 = 'CECILL-1.1';
    case CECILL_2_0 = 'CECILL-2.0';
    case CECILL_2_1 = 'CECILL-2.1';
    case CECILL_B = 'CECILL-B';
    case CECILL_C = 'CECILL-C';
    case CERN_OHL_1_1 = 'CERN-OHL-1.1';
    case CERN_OHL_1_2 = 'CERN-OHL-1.2';
    case CERN_OHL_P_2_0 = 'CERN-OHL-P-2.0';
    case CERN_OHL_S_2_0 = 'CERN-OHL-S-2.0';
    case CERN_OHL_W_2_0 = 'CERN-OHL-W-2.0';
    case CFITSIO = 'CFITSIO';
    case CHECK_CVS = 'check-cvs';
    case CHECKMK = 'checkmk';
    case CLARTISTIC = 'ClArtistic';
    case CLIPS = 'Clips';
    case CMU_MACH = 'CMU-Mach';
    case CNRI_JYTHON = 'CNRI-Jython';
    case CNRI_PYTHON = 'CNRI-Python';
    case CNRI_PYTHON_GPL_COMPATIBLE = 'CNRI-Python-GPL-Compatible';
    case COIL_1_0 = 'COIL-1.0';
    case COMMUNITY_SPEC_1_0 = 'Community-Spec-1.0';
    case CONDOR_1_1 = 'Condor-1.1';
    case COPYLEFT_NEXT_0_3_0 = 'copyleft-next-0.3.0';
    case COPYLEFT_NEXT_0_3_1 = 'copyleft-next-0.3.1';
    case CORNELL_LOSSLESS_JPEG = 'Cornell-Lossless-JPEG';
    case CPAL_1_0 = 'CPAL-1.0';
    case CPL_1_0 = 'CPL-1.0';
    case CPOL_1_02 = 'CPOL-1.02';
    case CRONYX = 'Cronyx';
    case CROSSWORD = 'Crossword';
    case CRYSTALSTACKER = 'CrystalStacker';
    case CUA_OPL_1_0 = 'CUA-OPL-1.0';
    case CUBE = 'Cube';
    case CURL = 'curl';
    case D_FSL_1_0 = 'D-FSL-1.0';
    case DEC_3_CLAUSE = 'DEC-3-Clause';
    case DIFFMARK = 'diffmark';
    case DL_DE_BY_2_0 = 'DL-DE-BY-2.0';
    case DL_DE_ZERO_2_0 = 'DL-DE-ZERO-2.0';
    case DOC = 'DOC';
    case DOTSEQN = 'Dotseqn';
    case DRL_1_0 = 'DRL-1.0';
    case DRL_1_1 = 'DRL-1.1';
    case DSDP = 'DSDP';
    case DTOA = 'dtoa';
    case DVIPDFM = 'dvipdfm';
    case ECL_1_0 = 'ECL-1.0';
    case ECL_2_0 = 'ECL-2.0';
    case ECOS_2_0 = 'eCos-2.0';
    case EFL_1_0 = 'EFL-1.0';
    case EFL_2_0 = 'EFL-2.0';
    case EGENIX = 'eGenix';
    case ELASTIC_2_0 = 'Elastic-2.0';
    case ENTESSA = 'Entessa';
    case EPICS = 'EPICS';
    case EPL_1_0 = 'EPL-1.0';
    case EPL_2_0 = 'EPL-2.0';
    case ERLPL_1_1 = 'ErlPL-1.1';
    case ETALAB_2_0 = 'etalab-2.0';
    case EUDATAGRID = 'EUDatagrid';
    case EUPL_1_0 = 'EUPL-1.0';
    case EUPL_1_1 = 'EUPL-1.1';
    case EUPL_1_2 = 'EUPL-1.2';
    case EUROSYM = 'Eurosym';
    case FAIR = 'Fair';
    case FBM = 'FBM';
    case FDK_AAC = 'FDK-AAC';
    case FERGUSON_TWOFISH = 'Ferguson-Twofish';
    case FRAMEWORX_1_0 = 'Frameworx-1.0';
    case FREEBSD_DOC = 'FreeBSD-DOC';
    case FREEIMAGE = 'FreeImage';
    case FSFAP = 'FSFAP';
    case FSFUL = 'FSFUL';
    case FSFULLR = 'FSFULLR';
    case FSFULLRWD = 'FSFULLRWD';
    case FTL = 'FTL';
    case FURUSETH = 'Furuseth';
    case FWLW = 'fwlw';
    case GCR_DOCS = 'GCR-docs';
    case GD = 'GD';
    case GFDL_1_1 = 'GFDL-1.1';
    case GFDL_1_1_INVARIANTS_ONLY = 'GFDL-1.1-invariants-only';
    case GFDL_1_1_INVARIANTS_OR_LATER = 'GFDL-1.1-invariants-or-later';
    case GFDL_1_1_NO_INVARIANTS_ONLY = 'GFDL-1.1-no-invariants-only';
    case GFDL_1_1_NO_INVARIANTS_OR_LATER = 'GFDL-1.1-no-invariants-or-later';
    case GFDL_1_1_ONLY = 'GFDL-1.1-only';
    case GFDL_1_1_OR_LATER = 'GFDL-1.1-or-later';
    case GFDL_1_2 = 'GFDL-1.2';
    case GFDL_1_2_INVARIANTS_ONLY = 'GFDL-1.2-invariants-only';
    case GFDL_1_2_INVARIANTS_OR_LATER = 'GFDL-1.2-invariants-or-later';
    case GFDL_1_2_NO_INVARIANTS_ONLY = 'GFDL-1.2-no-invariants-only';
    case GFDL_1_2_NO_INVARIANTS_OR_LATER = 'GFDL-1.2-no-invariants-or-later';
    case GFDL_1_2_ONLY = 'GFDL-1.2-only';
    case GFDL_1_2_OR_LATER = 'GFDL-1.2-or-later';
    case GFDL_1_3 = 'GFDL-1.3';
    case GFDL_1_3_INVARIANTS_ONLY = 'GFDL-1.3-invariants-only';
    case GFDL_1_3_INVARIANTS_OR_LATER = 'GFDL-1.3-invariants-or-later';
    case GFDL_1_3_NO_INVARIANTS_ONLY = 'GFDL-1.3-no-invariants-only';
    case GFDL_1_3_NO_INVARIANTS_OR_LATER = 'GFDL-1.3-no-invariants-or-later';
    case GFDL_1_3_ONLY = 'GFDL-1.3-only';
    case GFDL_1_3_OR_LATER = 'GFDL-1.3-or-later';
    case GIFTWARE = 'Giftware';
    case GL2PS = 'GL2PS';
    case GLIDE = 'Glide';
    case GLULXE = 'Glulxe';
    case GLWTPL = 'GLWTPL';
    case GNUPLOT = 'gnuplot';
    case GPL_1_0 = 'GPL-1.0';
    case GPL_1_0_PLUS = 'GPL-1.0+';
    case GPL_1_0_ONLY = 'GPL-1.0-only';
    case GPL_1_0_OR_LATER = 'GPL-1.0-or-later';
    case GPL_2_0 = 'GPL-2.0';
    case GPL_2_0_PLUS = 'GPL-2.0+';
    case GPL_2_0_ONLY = 'GPL-2.0-only';
    case GPL_2_0_OR_LATER = 'GPL-2.0-or-later';
    case GPL_2_0_WITH_AUTOCONF_EXCEPTION = 'GPL-2.0-with-autoconf-exception';
    case GPL_2_0_WITH_BISON_EXCEPTION = 'GPL-2.0-with-bison-exception';
    case GPL_2_0_WITH_CLASSPATH_EXCEPTION = 'GPL-2.0-with-classpath-exception';
    case GPL_2_0_WITH_FONT_EXCEPTION = 'GPL-2.0-with-font-exception';
    case GPL_2_0_WITH_GCC_EXCEPTION = 'GPL-2.0-with-GCC-exception';
    case GPL_3_0 = 'GPL-3.0';
    case GPL_3_0_PLUS = 'GPL-3.0+';
    case GPL_3_0_ONLY = 'GPL-3.0-only';
    case GPL_3_0_OR_LATER = 'GPL-3.0-or-later';
    case GPL_3_0_WITH_AUTOCONF_EXCEPTION = 'GPL-3.0-with-autoconf-exception';
    case GPL_3_0_WITH_GCC_EXCEPTION = 'GPL-3.0-with-GCC-exception';
    case GRAPHICS_GEMS = 'Graphics-Gems';
    case GSOAP_1_3B = 'gSOAP-1.3b';
    case HASKELLREPORT = 'HaskellReport';
    case HDPARM = 'hdparm';
    case HIPPOCRATIC_2_1 = 'Hippocratic-2.1';
    case HP_1986 = 'HP-1986';
    case HP_1989 = 'HP-1989';
    case HPND = 'HPND';
    case HPND_DEC = 'HPND-DEC';
    case HPND_DOC = 'HPND-doc';
    case HPND_DOC_SELL = 'HPND-doc-sell';
    case HPND_EXPORT_US = 'HPND-export-US';
    case HPND_EXPORT_US_MODIFY = 'HPND-export-US-modify';
    case HPND_MARKUS_KUHN = 'HPND-Markus-Kuhn';
    case HPND_PBMPLUS = 'HPND-Pbmplus';
    case HPND_SELL_MIT_DISCLAIMER_XSERVER = 'HPND-sell-MIT-disclaimer-xserver';
    case HPND_SELL_REGEXPR = 'HPND-sell-regexpr';
    case HPND_SELL_VARIANT = 'HPND-sell-variant';
    case HPND_SELL_VARIANT_MIT_DISCLAIMER = 'HPND-sell-variant-MIT-disclaimer';
    case HPND_UC = 'HPND-UC';
    case HTMLTIDY = 'HTMLTIDY';
    case IBM_PIBS = 'IBM-pibs';
    case ICU = 'ICU';
    case IEC_CODE_COMPONENTS_EULA = 'IEC-Code-Components-EULA';
    case IJG = 'IJG';
    case IJG_SHORT = 'IJG-short';
    case IMAGEMAGICK = 'ImageMagick';
    case IMATIX = 'iMatix';
    case IMLIB2 = 'Imlib2';
    case INFO_ZIP = 'Info-ZIP';
    case INNER_NET_2_0 = 'Inner-Net-2.0';
    case INTEL = 'Intel';
    case INTEL_ACPI = 'Intel-ACPI';
    case INTERBASE_1_0 = 'Interbase-1.0';
    case IPA = 'IPA';
    case IPL_1_0 = 'IPL-1.0';
    case ISC = 'ISC';
    case JAM = 'Jam';
    case JASPER_2_0 = 'JasPer-2.0';
    case JPL_IMAGE = 'JPL-image';
    case JPNIC = 'JPNIC';
    case JSON = 'JSON';
    case KASTRUP = 'Kastrup';
    case KAZLIB = 'Kazlib';
    case KNUTH_CTAN = 'Knuth-CTAN';
    case LAL_1_2 = 'LAL-1.2';
    case LAL_1_3 = 'LAL-1.3';
    case LATEX2E = 'Latex2e';
    case LATEX2E_TRANSLATED_NOTICE = 'Latex2e-translated-notice';
    case LEPTONICA = 'Leptonica';
    case LGPL_2_0 = 'LGPL-2.0';
    case LGPL_2_0_PLUS = 'LGPL-2.0+';
    case LGPL_2_0_ONLY = 'LGPL-2.0-only';
    case LGPL_2_0_OR_LATER = 'LGPL-2.0-or-later';
    case LGPL_2_1 = 'LGPL-2.1';
    case LGPL_2_1_PLUS = 'LGPL-2.1+';
    case LGPL_2_1_ONLY = 'LGPL-2.1-only';
    case LGPL_2_1_OR_LATER = 'LGPL-2.1-or-later';
    case LGPL_3_0 = 'LGPL-3.0';
    case LGPL_3_0_PLUS = 'LGPL-3.0+';
    case LGPL_3_0_ONLY = 'LGPL-3.0-only';
    case LGPL_3_0_OR_LATER = 'LGPL-3.0-or-later';
    case LGPLLR = 'LGPLLR';
    case LIBPNG = 'Libpng';
    case LIBPNG_2_0 = 'libpng-2.0';
    case LIBSELINUX_1_0 = 'libselinux-1.0';
    case LIBTIFF = 'libtiff';
    case LIBUTIL_DAVID_NUGENT = 'libutil-David-Nugent';
    case LILIQ_P_1_1 = 'LiLiQ-P-1.1';
    case LILIQ_R_1_1 = 'LiLiQ-R-1.1';
    case LILIQ_RPLUS_1_1 = 'LiLiQ-Rplus-1.1';
    case LINUX_MAN_PAGES_1_PARA = 'Linux-man-pages-1-para';
    case LINUX_MAN_PAGES_COPYLEFT = 'Linux-man-pages-copyleft';
    case LINUX_MAN_PAGES_COPYLEFT_2_PARA = 'Linux-man-pages-copyleft-2-para';
    case LINUX_MAN_PAGES_COPYLEFT_VAR = 'Linux-man-pages-copyleft-var';
    case LINUX_OPENIB = 'Linux-OpenIB';
    case LOOP = 'LOOP';
    case LPL_1_0 = 'LPL-1.0';
    case LPL_1_02 = 'LPL-1.02';
    case LPPL_1_0 = 'LPPL-1.0';
    case LPPL_1_1 = 'LPPL-1.1';
    case LPPL_1_2 = 'LPPL-1.2';
    case LPPL_1_3A = 'LPPL-1.3a';
    case LPPL_1_3C = 'LPPL-1.3c';
    case LSOF = 'lsof';
    case LUCIDA_BITMAP_FONTS = 'Lucida-Bitmap-Fonts';
    case LZMA_SDK_9_11_TO_9_20 = 'LZMA-SDK-9.11-to-9.20';
    case LZMA_SDK_9_22 = 'LZMA-SDK-9.22';
    case MAGAZ = 'magaz';
    case MAKEINDEX = 'MakeIndex';
    case MARTIN_BIRGMEIER = 'Martin-Birgmeier';
    case MCPHEE_SLIDESHOW = 'McPhee-slideshow';
    case METAMAIL = 'metamail';
    case MINPACK = 'Minpack';
    case MIROS = 'MirOS';
    case MIT = 'MIT';
    case MIT_0 = 'MIT-0';
    case MIT_ADVERTISING = 'MIT-advertising';
    case MIT_CMU = 'MIT-CMU';
    case MIT_ENNA = 'MIT-enna';
    case MIT_FEH = 'MIT-feh';
    case MIT_FESTIVAL = 'MIT-Festival';
    case MIT_MODERN_VARIANT = 'MIT-Modern-Variant';
    case MIT_OPEN_GROUP = 'MIT-open-group';
    case MIT_TESTREGEX = 'MIT-testregex';
    case MIT_WU = 'MIT-Wu';
    case MITNFA = 'MITNFA';
    case MMIXWARE = 'MMIXware';
    case MOTOSOTO = 'Motosoto';
    case MPEG_SSG = 'MPEG-SSG';
    case MPI_PERMISSIVE = 'mpi-permissive';
    case MPICH2 = 'mpich2';
    case MPL_1_0 = 'MPL-1.0';
    case MPL_1_1 = 'MPL-1.1';
    case MPL_2_0 = 'MPL-2.0';
    case MPL_2_0_NO_COPYLEFT_EXCEPTION = 'MPL-2.0-no-copyleft-exception';
    case MPLUS = 'mplus';
    case MS_LPL = 'MS-LPL';
    case MS_PL = 'MS-PL';
    case MS_RL = 'MS-RL';
    case MTLL = 'MTLL';
    case MULANPSL_1_0 = 'MulanPSL-1.0';
    case MULANPSL_2_0 = 'MulanPSL-2.0';
    case MULTICS = 'Multics';
    case MUP = 'Mup';
    case NAIST_2003 = 'NAIST-2003';
    case NASA_1_3 = 'NASA-1.3';
    case NAUMEN = 'Naumen';
    case NBPL_1_0 = 'NBPL-1.0';
    case NCGL_UK_2_0 = 'NCGL-UK-2.0';
    case NCSA = 'NCSA';
    case NET_SNMP = 'Net-SNMP';
    case NETCDF = 'NetCDF';
    case NEWSLETR = 'Newsletr';
    case NGPL = 'NGPL';
    case NICTA_1_0 = 'NICTA-1.0';
    case NIST_PD = 'NIST-PD';
    case NIST_PD_FALLBACK = 'NIST-PD-fallback';
    case NIST_SOFTWARE = 'NIST-Software';
    case NLOD_1_0 = 'NLOD-1.0';
    case NLOD_2_0 = 'NLOD-2.0';
    case NLPL = 'NLPL';
    case NOKIA = 'Nokia';
    case NOSL = 'NOSL';
    case NOWEB = 'Noweb';
    case NPL_1_0 = 'NPL-1.0';
    case NPL_1_1 = 'NPL-1.1';
    case NPOSL_3_0 = 'NPOSL-3.0';
    case NRL = 'NRL';
    case NTP = 'NTP';
    case NTP_0 = 'NTP-0';
    case NUNIT = 'Nunit';
    case O_UDA_1_0 = 'O-UDA-1.0';
    case OCCT_PL = 'OCCT-PL';
    case OCLC_2_0 = 'OCLC-2.0';
    case ODBL_1_0 = 'ODbL-1.0';
    case ODC_BY_1_0 = 'ODC-By-1.0';
    case OFFIS = 'OFFIS';
    case OFL_1_0 = 'OFL-1.0';
    case OFL_1_0_NO_RFN = 'OFL-1.0-no-RFN';
    case OFL_1_0_RFN = 'OFL-1.0-RFN';
    case OFL_1_1 = 'OFL-1.1';
    case OFL_1_1_NO_RFN = 'OFL-1.1-no-RFN';
    case OFL_1_1_RFN = 'OFL-1.1-RFN';
    case OGC_1_0 = 'OGC-1.0';
    case OGDL_TAIWAN_1_0 = 'OGDL-Taiwan-1.0';
    case OGL_CANADA_2_0 = 'OGL-Canada-2.0';
    case OGL_UK_1_0 = 'OGL-UK-1.0';
    case OGL_UK_2_0 = 'OGL-UK-2.0';
    case OGL_UK_3_0 = 'OGL-UK-3.0';
    case OGTSL = 'OGTSL';
    case OLDAP_1_1 = 'OLDAP-1.1';
    case OLDAP_1_2 = 'OLDAP-1.2';
    case OLDAP_1_3 = 'OLDAP-1.3';
    case OLDAP_1_4 = 'OLDAP-1.4';
    case OLDAP_2_0 = 'OLDAP-2.0';
    case OLDAP_2_0_1 = 'OLDAP-2.0.1';
    case OLDAP_2_1 = 'OLDAP-2.1';
    case OLDAP_2_2 = 'OLDAP-2.2';
    case OLDAP_2_2_1 = 'OLDAP-2.2.1';
    case OLDAP_2_2_2 = 'OLDAP-2.2.2';
    case OLDAP_2_3 = 'OLDAP-2.3';
    case OLDAP_2_4 = 'OLDAP-2.4';
    case OLDAP_2_5 = 'OLDAP-2.5';
    case OLDAP_2_6 = 'OLDAP-2.6';
    case OLDAP_2_7 = 'OLDAP-2.7';
    case OLDAP_2_8 = 'OLDAP-2.8';
    case OLFL_1_3 = 'OLFL-1.3';
    case OML = 'OML';
    case OPENPBS_2_3 = 'OpenPBS-2.3';
    case OPENSSL = 'OpenSSL';
    case OPL_1_0 = 'OPL-1.0';
    case OPL_UK_3_0 = 'OPL-UK-3.0';
    case OPUBL_1_0 = 'OPUBL-1.0';
    case OSET_PL_2_1 = 'OSET-PL-2.1';
    case OSL_1_0 = 'OSL-1.0';
    case OSL_1_1 = 'OSL-1.1';
    case OSL_2_0 = 'OSL-2.0';
    case OSL_2_1 = 'OSL-2.1';
    case OSL_3_0 = 'OSL-3.0';
    case PADL = 'PADL';
    case PARITY_6_0_0 = 'Parity-6.0.0';
    case PARITY_7_0_0 = 'Parity-7.0.0';
    case PDDL_1_0 = 'PDDL-1.0';
    case PHP_3_0 = 'PHP-3.0';
    case PHP_3_01 = 'PHP-3.01';
    case PIXAR = 'Pixar';
    case PLEXUS = 'Plexus';
    case PNMSTITCH = 'pnmstitch';
    case POLYFORM_NONCOMMERCIAL_1_0_0 = 'PolyForm-Noncommercial-1.0.0';
    case POLYFORM_SMALL_BUSINESS_1_0_0 = 'PolyForm-Small-Business-1.0.0';
    case POSTGRESQL = 'PostgreSQL';
    case PSF_2_0 = 'PSF-2.0';
    case PSFRAG = 'psfrag';
    case PSUTILS = 'psutils';
    case PYTHON_2_0 = 'Python-2.0';
    case PYTHON_2_0_1 = 'Python-2.0.1';
    case PYTHON_LDAP = 'python-ldap';
    case QHULL = 'Qhull';
    case QPL_1_0 = 'QPL-1.0';
    case QPL_1_0_INRIA_2004 = 'QPL-1.0-INRIA-2004';
    case RDISC = 'Rdisc';
    case RHECOS_1_1 = 'RHeCos-1.1';
    case RPL_1_1 = 'RPL-1.1';
    case RPL_1_5 = 'RPL-1.5';
    case RPSL_1_0 = 'RPSL-1.0';
    case RSA_MD = 'RSA-MD';
    case RSCPL = 'RSCPL';
    case RUBY = 'Ruby';
    case SAX_PD = 'SAX-PD';
    case SAXPATH = 'Saxpath';
    case SCEA = 'SCEA';
    case SCHEMEREPORT = 'SchemeReport';
    case SENDMAIL = 'Sendmail';
    case SENDMAIL_8_23 = 'Sendmail-8.23';
    case SGI_B_1_0 = 'SGI-B-1.0';
    case SGI_B_1_1 = 'SGI-B-1.1';
    case SGI_B_2_0 = 'SGI-B-2.0';
    case SGI_OPENGL = 'SGI-OpenGL';
    case SGP4 = 'SGP4';
    case SHL_0_5 = 'SHL-0.5';
    case SHL_0_51 = 'SHL-0.51';
    case SIMPL_2_0 = 'SimPL-2.0';
    case SISSL = 'SISSL';
    case SISSL_1_2 = 'SISSL-1.2';
    case SL = 'SL';
    case SLEEPYCAT = 'Sleepycat';
    case SMLNJ = 'SMLNJ';
    case SMPPL = 'SMPPL';
    case SNIA = 'SNIA';
    case SNPRINTF = 'snprintf';
    case SOUNDEX = 'Soundex';
    case SPENCER_86 = 'Spencer-86';
    case SPENCER_94 = 'Spencer-94';
    case SPENCER_99 = 'Spencer-99';
    case SPL_1_0 = 'SPL-1.0';
    case SSH_KEYSCAN = 'ssh-keyscan';
    case SSH_OPENSSH = 'SSH-OpenSSH';
    case SSH_SHORT = 'SSH-short';
    case SSPL_1_0 = 'SSPL-1.0';
    case STANDARDML_NJ = 'StandardML-NJ';
    case SUGARCRM_1_1_3 = 'SugarCRM-1.1.3';
    case SUNPRO = 'SunPro';
    case SWL = 'SWL';
    case SWRULE = 'swrule';
    case SYMLINKS = 'Symlinks';
    case TAPR_OHL_1_0 = 'TAPR-OHL-1.0';
    case TCL = 'TCL';
    case TCP_WRAPPERS = 'TCP-wrappers';
    case TERMREADKEY = 'TermReadKey';
    case TMATE = 'TMate';
    case TORQUE_1_1 = 'TORQUE-1.1';
    case TOSL = 'TOSL';
    case TPDL = 'TPDL';
    case TPL_1_0 = 'TPL-1.0';
    case TTWL = 'TTWL';
    case TTYP0 = 'TTYP0';
    case TU_BERLIN_1_0 = 'TU-Berlin-1.0';
    case TU_BERLIN_2_0 = 'TU-Berlin-2.0';
    case UCAR = 'UCAR';
    case UCL_1_0 = 'UCL-1.0';
    case ULEM = 'ulem';
    case UNICODE_DFS_2015 = 'Unicode-DFS-2015';
    case UNICODE_DFS_2016 = 'Unicode-DFS-2016';
    case UNICODE_TOU = 'Unicode-TOU';
    case UNIXCRYPT = 'UnixCrypt';
    case UNLICENSE = 'Unlicense';
    case UPL_1_0 = 'UPL-1.0';
    case URT_RLE = 'URT-RLE';
    case VIM = 'Vim';
    case VOSTROM = 'VOSTROM';
    case VSL_1_0 = 'VSL-1.0';
    case W3C = 'W3C';
    case W3C_19980720 = 'W3C-19980720';
    case W3C_20150513 = 'W3C-20150513';
    case W3M = 'w3m';
    case WATCOM_1_0 = 'Watcom-1.0';
    case WIDGET_WORKSHOP = 'Widget-Workshop';
    case WSUIPA = 'Wsuipa';
    case WTFPL = 'WTFPL';
    case WXWINDOWS = 'wxWindows';
    case X11 = 'X11';
    case X11_DISTRIBUTE_MODIFICATIONS_VARIANT = 'X11-distribute-modifications-variant';
    case XDEBUG = 'Xdebug-1.03';
    case XEROX = 'Xerox';
    case XFIG = 'Xfig';
    case XFREE86_1_1 = 'XFree86-1.1';
    case XINETD = 'xinetd';
    case XLOCK = 'xlock';
    case XNET = 'Xnet';
    case XPP = 'xpp';
    case XSKAT = 'XSkat';
    case YPL_1_0 = 'YPL-1.0';
    case YPL_1_1 = 'YPL-1.1';
    case ZED = 'Zed';
    case ZEEFF = 'Zeeff';
    case ZEND_2_0 = 'Zend-2.0';
    case ZIMBRA_1_3 = 'Zimbra-1.3';
    case ZIMBRA_1_4 = 'Zimbra-1.4';
    case ZLIB = 'Zlib';
    case ZLIB_ACKNOWLEDGEMENT = 'zlib-acknowledgement';
    case ZPL_1_1 = 'ZPL-1.1';
    case ZPL_2_0 = 'ZPL-2.0';
    case ZPL_2_1 = 'ZPL-2.1';

    // Supporting unknown licenses, without too much complexity
    case UNKNOWN = 'unknown';
}