<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class CUSTTABLE extends Model
{
    // Nombre de la tabla real
    protected $table = 'CUSTTABLE';

    // Clave primaria
    // las primarys keys son ACCOUNTNUM y DATAAREAID

    // Si no usas timestamps (created_at / updated_at)
    public $timestamps = false;

    // Si necesitas una conexión específica
    protected $connection = 'sqlsrv_AXDB30';

    // Campos asignables
    protected $fillable = [
        'ACCOUNTNUM',
        'NAME',
        'ADDRESS',
        'PHONE',
        'TELEFAX',
        'INVOICEACCOUNT',
        'CUSTGROUP',
        'LINEDISC',
        'PAYMTERMID',
        'CASHDISC',
        'CURRENCY',
        'SALESGROUP',
        'BLOCKED',
        'ONETIMECUSTOMER',
        'ACCOUNTSTATEMENT',
        'CREDITMAX',
        'MANDATORYCREDITLIMIT',
        'DIMENSION',
        'DIMENSION2_',
        'DIMENSION3_',
        'VENDACCOUNT',
        'TELEX',
        'PRICEGROUP',
        'MULTILINEDISC',
        'ENDDISC',
        'VATNUM',
        'COUNTRY',
        'INVENTLOCATION',
        'DLVTERM',
        'DLVMODE',
        'MARKUPGROUP',
        'CLEARINGPERIOD',
        'ZIPCODE',
        'STATE',
        'COUNTY',
        'URL',
        'EMAIL',
        'CELLULARPHONE',
        'PHONELOCAL',
        'FREIGHTZONE',
        'CREDITRATING',
        'TAXGROUP',
        'STATISTICSGROUP',
        'PAYMMODE',
        'COMMISSIONGROUP',
        'BANKACCOUNT',
        'PAYMSCHED',
        'NAMEALIAS',
        'CONTACTPERSONID',
        'INVOICEADDRESS',
        'OURACCOUNTNUM',
        'SALESPOOLID',
        'DEL_QUOTATIONCOPIES',
        'DEL_QUOTATIONORIGINALS',
        'DEL_CONFIRMATIONORIGINALS',
        'DEL_INVOICECOPIES',
        'DEL_INVOICEORIGINALS',
        'DEL_PACKINGSLIPCOPIES',
        'DEL_PACKINGSLIPORIGINALS',
        'DEL_CONFIRMATIONCOPIES',
        'INCLTAX',
        'CUSTITEMGROUPID',
        'NUMBERSEQUENCEGROUP',
        'LANGUAGEID',
        'PAYMDAYID',
        'LINEOFBUSINESSID',
        'DESTINATIONCODEID',
        'GIROTYPE',
        'SUPPITEMGROUPID',
        'GIROTYPEINTERESTNOTE',
        'TAXLICENSENUM',
        'WEBSALESORDERDISPLAY',
        'PAYMSPEC',
        'BANKCENTRALBANKPURPOSETEXT',
        'BANKCENTRALBANKPURPOSECODE',
        'PRINTMODULETYPE',
        'CITY',
        'STREET',
        'PAGER',
        'SMS',
        'REFZIPCODE',
        'PACKMATERIALFEELICENSENUM',
        'PBACUSTGROUPID',
        'NATAGCLIENTESREL',
        'EDICION',
        'ENDDATE',
        'BEGINDATE',
        'SALESAMOUNTPACKINGSLIPORDER',
        'WEBLOGIN',
        'NAMECOMER',
        'LIQUIDS',
        'CONTACTLENS',
        'FRAMES',
        'MONTHINVOICEDAMOUNT',
        'GLASSES',
        'ANOTHERSERVICES',
        'AUDIOLOGY',
        'OPTICSELLERQTY',
        'OPTICEMPLQTY',
        'OPTICANTIQUITY',
        'GLASSESMONTHPURCH',
        'LIQUIDSMONTHPURCH',
        'CONTACTLENSMONTHPURCH',
        'FRAMESMONTHPURCH',
        'ESTABLISHASPECT',
        'ESTABLISHSURFACE',
        'ESTABLISHFRONTSURFACE',
        'AREALOCATION',
        'CENTERLOCATION',
        'DIRECTCOMPETITIONGROUP',
        'DIRECTCOMPETITIONCHAIN',
        'PRINCIPALCOMPETITONGROUPS',
        'COMPETITIONOPTICQTY',
        'ANOTHERTIPOLOGY',
        'DISCOUNTERSTIPOLOGY',
        'MARKTIPOLOGY',
        'PROFESSIONALSTIPOLOGY',
        'MANAGERAPPLICATION',
        'COMPUTERSQTY',
        'ISCOMPUTERIZED',
        'DIRECTCOMPETITONINDEPENDENT',
        'ANOTHEROBSERVATIONS',
        'INTERNETCONNECTION',
        'STATISTICSDATE',
        'STATISTICSEMPLID',
        'OPTICOPTICSQTY',
        'PEDESTRIANLOCATION',
        'COMERCIALCENTERLOCATION',
        'EMPLEXT',
        'EMPLINT',
        'ADDRESSPRINT',
        'EMPLPRINCIPAL',
        'CALCULATIONSUSEFUL',
        'BUDGETARYUSEFUL',
        'PAYMENT',
        'PRINTINVOICERESUM',
        'EXTRANET',
        'JAMD_LANGUAGEID',
        'JAMD_OCULTO',
        'NATPASSWORDINTRA',
        'NATPASSWORDTIENDA',
        'NAT_DELIVERYCOMPANY',
        'NAT_MODIFIEDDATE',
        'EMPLPRODUCT',
        'SALESBOCKED',
        'EMPLCM',
        'SELECCION1',
        'SELECCION2',
        'IDLOW',
        'EMPLCM2',
        'CUSTMATRIZ',
        'CUSTINSUREDID',
        'INSUREDAMOUNT',
        'MANDATORYINSURECREDITLIMIT',
        'PACKINGSLIPTOSALESTABLE',
        'CUSTTYPE',
        'ACCOUNTNUMCRM',
        'EMAILSECOND',
        'NATINVOICEMONTHLY',
        'EMPLCS',
        'BUSRELTYPEID',
        'CODIGO_CRM',
        'SDI',
        'CODEFISCAL',
        'MODIFIEDDATE',
        'MODIFIEDTIME',
        'MODIFIEDBY',
        'CREATEDDATE',
        'CREATEDTIME',
        'CREATEDBY',
        'DATAAREAID',
        'RECID',
    ];

    /* protected $casts = [

        "ACCOUNTNUM" => 'string',
        "NAME" => 'string',
        "ADDRESS" => 'string',
        "PHONE" => 'string',
        "TELEFAX" => 'string',
        "INVOICEACCOUNT" => 'string',
        "CUSTGROUP" => 'string',
        "LINEDISC" => 'string',
        "PAYMTERMID" => 'string',
        "CASHDISC" => 'string',
        "CURRENCY" => 'string',
        "SALESGROUP" => 'string',
        "BLOCKED" => 'integer',
        "ONETIMECUSTOMER" => 'integer',
        "ACCOUNTSTATEMENT" => 'integer',
        "CREDITMAX" => 'integer',
        "MANDATORYCREDITLIMIT" => 'integer',
        "DIMENSION" => 'string',
        "DIMENSION2_" => 'string',
        "DIMENSION3_" => 'string',
        "VENDACCOUNT" => 'string',
        "TELEX" => 'string',
        "PRICEGROUP" => 'string',
        "MULTILINEDISC" => 'string',
        "ENDDISC" => 'string',
        "VATNUM" => 'string',
        "COUNTRY" => 'string',
        "INVENTLOCATION" => 'string',
        "DLVTERM" => 'string',
        "DLVMODE" => 'string',
        "MARKUPGROUP" => 'string',
        "CLEARINGPERIOD" => 'string',
        "ZIPCODE" => 'string',
        "STATE" => 'string',
        "COUNTY" => 'string',
        "URL" => 'string',
        "EMAIL" => 'string',
        "CELLULARPHONE" => 'string',
        "PHONELOCAL" => 'string',
        "FREIGHTZONE" => 'string',
        "CREDITRATING" => 'string',
        "TAXGROUP" => 'string',
        "STATISTICSGROUP" => 'string',
        "PAYMMODE" => 'string',
        "COMMISSIONGROUP" => 'string',
        "BANKACCOUNT" => 'string',
        "PAYMSCHED" => 'string',
        "NAMEALIAS" => 'string',
        "CONTACTPERSONID" => 'string',
        "INVOICEADDRESS" => 'integer',
        "OURACCOUNTNUM" => 'string',
        "SALESPOOLID" => 'string',
        "DEL_QUOTATIONCOPIES" => 'integer',
        "DEL_QUOTATIONORIGINALS" => 'integer',
        "DEL_CONFIRMATIONORIGINALS" => 'integer',
        "DEL_INVOICECOPIES" => 'integer',
        "DEL_INVOICEORIGINALS" => 'integer',
        "DEL_PACKINGSLIPCOPIES" => 'integer',
        "DEL_PACKINGSLIPORIGINALS" => 'integer',
        "DEL_CONFIRMATIONCOPIES" => 'integer',
        "INCLTAX" => 'integer',
        "CUSTITEMGROUPID" => 'string',
        "NUMBERSEQUENCEGROUP" => 'string',
        "LANGUAGEID" => 'string',
        "PAYMDAYID" => 'string',
        "LINEOFBUSINESSID" => 'string',
        "DESTINATIONCODEID" => 'string',
        "GIROTYPE" => 'integer',
        "SUPPITEMGROUPID" => 'string',
        "GIROTYPEINTERESTNOTE" => 'integer',
        "TAXLICENSENUM" => 'string',
        "WEBSALESORDERDISPLAY" => 'integer',
        "PAYMSPEC" => 'string',
        "BANKCENTRALBANKPURPOSETEXT" => 'string',
        "BANKCENTRALBANKPURPOSECODE" => 'string',
        "PRINTMODULETYPE" => 'integer',
        "CITY" => 'string',
        "STREET" => 'string',
        "PAGER" => 'string',
        "SMS" => 'string',
        "REFZIPCODE" => 'integer',
        "PACKMATERIALFEELICENSENUM" => 'string',
        "PBACUSTGROUPID" => 'string',
        "NATAGCLIENTESREL" => 'string',
        "EDICION" => 'integer',
        "ENDDATE" DATETIME NOT NULL,
        "BEGINDATE" DATETIME NOT NULL,
        "SALESAMOUNTPACKINGSLIPORDER" => 'integer',
        "WEBLOGIN" => 'string',
        "NAMECOMER" => 'string',
        "LIQUIDS" => 'string',
        "CONTACTLENS" => 'string',
        "FRAMES" => 'string',
        "MONTHINVOICEDAMOUNT" => 'integer',
        "GLASSES" => 'string',
        "ANOTHERSERVICES" TEXT NULL DEFAULT NULL COLLATE 'Modern_Spanish_CI_AI',
        "AUDIOLOGY" => 'integer',
        "OPTICSELLERQTY" => 'integer',
        "OPTICEMPLQTY" => 'integer',
        "OPTICANTIQUITY" => 'integer',
        "GLASSESMONTHPURCH" => 'integer',
        "LIQUIDSMONTHPURCH" => 'integer',
        "CONTACTLENSMONTHPURCH" => 'integer',
        "FRAMESMONTHPURCH" => 'integer',
        "ESTABLISHASPECT" TEXT NULL DEFAULT NULL COLLATE 'Modern_Spanish_CI_AI',
        "ESTABLISHSURFACE" => 'integer',
        "ESTABLISHFRONTSURFACE" => 'integer',
        "AREALOCATION" => 'integer',
        "CENTERLOCATION" => 'integer',
        "DIRECTCOMPETITIONGROUP" => 'string',
        "DIRECTCOMPETITIONCHAIN" => 'string',
        "PRINCIPALCOMPETITONGROUPS" => 'string',
        "COMPETITIONOPTICQTY" => 'integer',
        "ANOTHERTIPOLOGY" => 'string',
        "DISCOUNTERSTIPOLOGY" => 'integer',
        "MARKTIPOLOGY" => 'integer',
        "PROFESSIONALSTIPOLOGY" => 'integer',
        "MANAGERAPPLICATION" => 'string',
        "COMPUTERSQTY" => 'integer',
        "ISCOMPUTERIZED" => 'integer',
        "DIRECTCOMPETITONINDEPENDENT" => 'string',
        "ANOTHEROBSERVATIONS" TEXT NULL DEFAULT NULL COLLATE 'Modern_Spanish_CI_AI',
        "INTERNETCONNECTION" => 'integer',
        "STATISTICSDATE" DATETIME NOT NULL,
        "STATISTICSEMPLID" => 'string',
        "OPTICOPTICSQTY" => 'integer',
        "PEDESTRIANLOCATION" => 'integer',
        "COMERCIALCENTERLOCATION" => 'integer',
        "EMPLEXT" => 'string',
        "EMPLINT" => 'string',
        "ADDRESSPRINT" => 'string',
        "EMPLPRINCIPAL" => 'string',
        "CALCULATIONSUSEFUL" => 'integer',
        "BUDGETARYUSEFUL" => 'integer',
        "PAYMENT" => 'string',
        "PRINTINVOICERESUM" => 'integer',
        "EXTRANET" => 'integer',
        "JAMD_LANGUAGEID" => 'string',
        "JAMD_OCULTO" => 'integer',
        "NATPASSWORDINTRA" => 'string',
        "NATPASSWORDTIENDA" => 'string',
        "NAT_DELIVERYCOMPANY" => 'string',
        "NAT_MODIFIEDDATE" DATETIME NOT NULL,
        "EMPLPRODUCT" => 'string',
        "SALESBOCKED" => 'integer',
        "EMPLCM" => 'string',
        "SELECCION1" => 'string',
        "SELECCION2" => 'string',
        "IDLOW" => 'string',
        "EMPLCM2" => 'string',
        "CUSTMATRIZ" => 'string',
        "CUSTINSUREDID" => 'string',
        "INSUREDAMOUNT" => 'integer',
        "MANDATORYINSURECREDITLIMIT" => 'integer',
        "PACKINGSLIPTOSALESTABLE" => 'integer',
        "CUSTTYPE" => 'integer',
        "ACCOUNTNUMCRM" => 'string',
        "EMAILSECOND" => 'string',
        "NATINVOICEMONTHLY" => 'integer',
        "EMPLCS" => 'string',
        "BUSRELTYPEID" => 'string',
        "CODIGO_CRM" => 'string',
        "SDI" => 'string',
        "CODEFISCAL" => 'string',
        "MODIFIEDDATE" DATETIME NOT NULL,
        "MODIFIEDTIME" => 'integer',
        "MODIFIEDBY" => 'string',
        "CREATEDDATE" DATETIME NOT NULL,
        "CREATEDTIME" => 'integer',
        "CREATEDBY" => 'string',
        "DATAAREAID" => 'string',
        "RECID" => 'integer',
    ];
 */
    // Campos ocultos al exportar a array/JSON
    protected $hidden = [
        'SIR_PASSWORD',
        'remember_token',
    ];

    public static function getClientes($empresa, $perfil, $user)
    {

        $query = DB::connection('sqlsrv_AXDB30')->table('Custtable as c')
            ->selectRaw(
                "LTRIM(c.ACCOUNTNUM) as AXAPTA,
                c.NAMECOMER as NOMBRECOMERCIAL,
                c.NAME as NOMBRE,
                c.weblogin as WEBLOGIN,
                c.PHONE as TELEFONO,
                c.zipcode as CODIGOPOSTAL,
                c.DATAAREAID as EMPRESA,
                c.CITY as CIUDAD,
                CASE 
                WHEN ISNULL(LTRIM(RTRIM(c.AddressPrint)), '') = '' THEN 'PORTAVISUAL'
                WHEN UPPER(c.AddressPrint) = 'RED' THEN 'UGO'
                ELSE UPPER(c.AddressPrint)
                END as AddressPrint"
            )

            ->join('empltable as e', function ($join) {
                $join->on('c.EMPLINT', '=', 'e.EMPLID')
                    ->where('e.dataareaid', '=', 'vir');
            })
            ->whereNotNull('c.BEGINDATE')
            ->where('c.CustGroup', '<>', 'BAJAS')
            ->whereIn('c.CustType', [1, 2, 3, 5, 53]);

        //Filtro según $empresa
        if ($empresa === 'todos') {
            $query->whereIn('c.DATAAREAID', ['red', 'nsl', 'prt']);
        } elseif ($empresa) {
            $query->where('c.DATAAREAID', $empresa);
        }

        // Filtro según $perfil
        if ($perfil === 'Comercial') {
            $query->where('c.EMPLINT', $user);
        } elseif ($perfil === 'ComerPrd') {
            $query->where('c.EMPLPRODUCT', $user);
        } elseif ($perfil === 'ComerFarma') {
            $query->where('c.DATAAREAID', 'far')
                ->where('c.EMPLINT', $user);
        }

        //Ejecutar y obtener resultados
        return $query->get();
    }

    /* public static function getInfoCliente($empresa, $cliente)
    {
        $countryMap = [
            'AF' => 'Afganistán',
            'AL' => 'Albania',
            'DE' => 'Alemania',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguila',
            'AQ' => 'Antártida',
            'AG' => 'Antigua y Barbuda',
            'SA' => 'Arabia Saudita',
            'DZ' => 'Argelia',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaiyán',
            'BS' => 'Bahamas',
            'BD' => 'Bangladés',
            'BB' => 'Barbados',
            'BH' => 'Baréin',
            'BE' => 'Bélgica',
            'BZ' => 'Belice',
            'BJ' => 'Benín',
            'BM' => 'Bermudas',
            'BY' => 'Bielorrusia',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia y Herzegovina',
            'BW' => 'Botsuana',
            'BR' => 'Brasil',
            'BN' => 'Brunéi',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'BT' => 'Bután',
            'CV' => 'Cabo Verde',
            'KH' => 'Camboya',
            'CM' => 'Camerún',
            'CA' => 'Canadá',
            'QA' => 'Catar',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CY' => 'Chipre',
            'VA' => 'Ciudad del Vaticano',
            'CO' => 'Colombia',
            'KM' => 'Comoras',
            'CG' => 'Congo',
            'CD' => 'Congo (Rep. Dem.)',
            'KP' => 'Corea del Norte',
            'KR' => 'Corea del Sur',
            'CI' => 'Costa de Marfil',
            'CR' => 'Costa Rica',
            'HR' => 'Croacia',
            'CU' => 'Cuba',
            'DK' => 'Dinamarca',
            'DM' => 'Dominica',
            'EC' => 'Ecuador',
            'EG' => 'Egipto',
            'SV' => 'El Salvador',
            'AE' => 'Emiratos Árabes Unidos',
            'ER' => 'Eritrea',
            'SK' => 'Eslovaquia',
            'SI' => 'Eslovenia',
            'ES' => 'España',
            'US' => 'Estados Unidos',
            'EE' => 'Estonia',
            'ET' => 'Etiopía',
            'PH' => 'Filipinas',
            'FI' => 'Finlandia',
            'FJ' => 'Fiyi',
            'FR' => 'Francia',
            'GA' => 'Gabón',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GD' => 'Granada',
            'GR' => 'Grecia',
            'GL' => 'Groenlandia',
            'GT' => 'Guatemala',
            'GN' => 'Guinea',
            'GQ' => 'Guinea Ecuatorial',
            'GW' => 'Guinea-Bisáu',
            'GY' => 'Guyana',
            'HT' => 'Haití',
            'HN' => 'Honduras',
            'HU' => 'Hungría',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IQ' => 'Irak',
            'IR' => 'Irán',
            'IE' => 'Irlanda',
            'IS' => 'Islandia',
            'IL' => 'Israel',
            'IT' => 'Italia',
            'JM' => 'Jamaica',
            'JP' => 'Japón',
            'JO' => 'Jordania',
            'KZ' => 'Kazajistán',
            'KE' => 'Kenia',
            'KG' => 'Kirguistán',
            'KI' => 'Kiribati',
            'KW' => 'Kuwait',
            'LA' => 'Laos',
            'LS' => 'Lesoto',
            'LV' => 'Letonia',
            'LB' => 'Líbano',
            'LR' => 'Liberia',
            'LY' => 'Libia',
            'LI' => 'Liechtenstein',
            'LT' => 'Lituania',
            'LU' => 'Luxemburgo',
            'MG' => 'Madagascar',
            'MY' => 'Malasia',
            'MW' => 'Malaui',
            'MV' => 'Maldivas',
            'ML' => 'Malí',
            'MT' => 'Malta',
            'MA' => 'Marruecos',
            'MU' => 'Mauricio',
            'MR' => 'Mauritania',
            'MX' => 'México',
            'FM' => 'Micronesia',
            'MD' => 'Moldavia',
            'MC' => 'Mónaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MZ' => 'Mozambique',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NI' => 'Nicaragua',
            'NE' => 'Níger',
            'NG' => 'Nigeria',
            'NO' => 'Noruega',
            'NZ' => 'Nueva Zelanda',
            'OM' => 'Omán',
            'NL' => 'Países Bajos',
            'PK' => 'Pakistán',
            'PW' => 'Palaos',
            'PA' => 'Panamá',
            'PG' => 'Papúa Nueva Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Perú',
            'PL' => 'Polonia',
            'PT' => 'Portugal',
            'GB' => 'Reino Unido',
            'CF' => 'República Centroafricana',
            'CZ' => 'República Checa',
            'DO' => 'República Dominicana',
            'RW' => 'Ruanda',
            'RO' => 'Rumanía',
            'RU' => 'Rusia',
            'WS' => 'Samoa',
            'KN' => 'San Cristóbal y Nieves',
            'SM' => 'San Marino',
            'VC' => 'San Vicente y las Granadinas',
            'SH' => 'Santa Elena',
            'LC' => 'Santa Lucía',
            'ST' => 'Santo Tomé y Príncipe',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leona',
            'SG' => 'Singapur',
            'SY' => 'Siria',
            'SO' => 'Somalia',
            'LK' => 'Sri Lanka',
            'SZ' => 'Suazilandia',
            'ZA' => 'Sudáfrica',
            'SD' => 'Sudán',
            'SS' => 'Sudán del Sur',
            'SE' => 'Suecia',
            'CH' => 'Suiza',
            'SR' => 'Surinam',
            'TH' => 'Tailandia',
            'TW' => 'Taiwán',
            'TZ' => 'Tanzania',
            'TJ' => 'Tayikistán',
            'TL' => 'Timor Oriental',
            'TG' => 'Togo',
            'TO' => 'Tonga',
            'TT' => 'Trinidad y Tobago',
            'TN' => 'Túnez',
            'TM' => 'Turkmenistán',
            'TR' => 'Turquía',
            'TV' => 'Tuvalu',
            'UA' => 'Ucrania',
            'UG' => 'Uganda',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistán',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Vietnam',
            'YE' => 'Yemen',
            'DJ' => 'Yibuti',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabue',
        ];

        $caseCountry = "CASE";

        foreach ($countryMap as $code => $name) {
            $caseCountry .= " WHEN UPPER(c.country) = '$code' THEN '$name'";
        }

        $caseCountry .= " ELSE c.country END AS country_name";

        return DB::connection('sqlsrv_AXDB30')->table('custtable as c')
            ->selectRaw("
            clf.NATCUSTCARACVALOR AS COMNAME,
            cl.NATCUSTCARAC,
            cl.NATCUSTCARACVALOR,
            p.EMAIL AS contact_email,
            LTRIM(c.accountnum) AS accountnum,
            c.name,
            c.address,
            c.phone,
            c.paymmode,
            c.creditmax,
            c.vatnum,
            c.email,
            c.emplint,
            c.zipcode,
            c.city,
            c.weblogin,
            c.state,
            $caseCountry,
            c.STATISTICSGROUP AS grupostat,
            c.URL AS webpages
        ")
            ->leftJoin('NatCustCaracItem as cl', function ($join) {
                $join->on('cl.DATAAREAID', '=', 'c.DATAAREAID')
                    ->whereColumn('cl.CUSTACCOUNT', 'c.ACCOUNTNUM')
                    ->where('cl.NATCUSTCARAC', 'FACTURAE');
            })
            ->leftJoin('NatCustCaracItem as clf', function ($join) {
                $join->on('clf.DATAAREAID', '=', 'c.DATAAREAID')
                    ->whereColumn('clf.CUSTACCOUNT', 'c.ACCOUNTNUM')
                    ->where('clf.NATCUSTCARAC', 'FORMACOMER');
            })
            ->leftJoin('ContactPerson as p', function ($join) {
                $join->where('p.DATAAREAID', 'vi3')
                    ->on('p.NatCompanyId', '=', 'c.DATAAREAID')
                    ->whereColumn('p.CUSTACCOUNT', 'c.ACCOUNTNUM')
                    ->where('p.TITLE', 'FacturaE');
            })
            ->where('c.DATAAREAID', $empresa)
            ->whereRaw("LTRIM(c.ACCOUNTNUM) = ?", [$cliente])
            ->first(); // Devuelve un único cliente
    }

    public static function infoAdicionalCliente($empresa, $user)
    {
        $provinceMap = [
            // EA1
            'O'   => 'Asturias',
            'AV'  => 'Ávila',
            'BU'  => 'Burgos',
            'S'   => 'Santander',
            'C'   => 'A Coruña',
            'LE'  => 'León',
            'LU'  => 'Lugo',
            'OR'  => 'Ourense',
            'P'   => 'Palencia',
            'PO'  => 'Pontevedra',
            'LO'  => 'Logroño',
            'SA'  => 'Salamanca',
            'SG'  => 'Segovia',
            'SO'  => 'Soria',
            'VA'  => 'Valladolid',
            'ZA'  => 'Zamora',
            // EA2
            'VI'  => 'Álava',
            'SS'  => 'Guipúzcoa',
            'HU'  => 'Huesca',
            'NA'  => 'Navarra',
            'TE'  => 'Teruel',
            'BI'  => 'Vizcaya',
            'Z'   => 'Zaragoza',
            // EA3
            'B'   => 'Barcelona',
            'GI'  => 'Girona',
            'L'   => 'Lleida',
            'T'   => 'Tarragona',
            // EA4
            'BA'  => 'Badajoz',
            'CC'  => 'Cáceres',
            'CR'  => 'Ciudad Real',
            'CU'  => 'Cuenca',
            'GU'  => 'Guadalajara',
            'M'   => 'Madrid',
            'TO'  => 'Toledo',
            // EA5
            'AB'  => 'Albacete',
            'A'   => 'Alicante',
            'CS'  => 'Castellón',
            'MU'  => 'Murcia',
            'V'   => 'Valencia',
            // EA6
            'IB'  => 'Illes Balears',
            // EA7
            'AL'  => 'Almería',
            'CA'  => 'Cádiz',
            'CO'  => 'Córdoba',
            'GR'  => 'Granada',
            'H'   => 'Huelva',
            'J'   => 'Jaén',
            'MA'  => 'Málaga',
            'SE'  => 'Sevilla',
            // EA8
            'GC'  => 'Las Palmas',
            'TF'  => 'Tenerife',
            // EA9
            'CE'  => 'Ceuta',
            'ML'  => 'Melilla',
        ];

        $caseCountry = "CASE";

        foreach ($provinceMap as $code => $name) {
            $caseCountry .= " WHEN UPPER(c.county) = '$code' THEN '$name'";
        }

        $caseCountry .= " ELSE c.county END AS county_name";

        return DB::connection('sqlsrv_AXDB30')->table('custtable as c')
            ->selectRaw("LTRIM(c.accountnum) as accountnum,
                            c.name,
                            c.address,
                            c.phone,
                            c.paymtermid,
                            c.CREDITMAX as CreditoMaximo,
                            c.MANDATORYCREDITLIMIT as limiteObligatorio,
                            c.CREDITRATING as CreditoTasacion,
                            c.vatnum,
                            c.email,
                            c.emplint,
                            c.zipcode,
                            c.city,
                            c.street,
                            $caseCountry,
                            W.WEBLOGINGROUP as TIPO,
                            W.NOMBRECOMERCIAL as NOMBRECOMERCIAL,
                            NC.NATCUSTCLASSIFICATIONID,
                            NC.DESCRIPTION as ClasificacionDescripcion")

            ->leftJoin('Sir_Weblogin as W', function ($join) {
                $join->on('c.weblogin', '=', 'W.WEBLOGIN')
                    ->whereColumn('c.dataareaid', 'W.dataareaid');
            })
            ->leftJoin('NATCUSTCLASIFICATION as NC', function ($join) {
                $join->on('W.NATCUSTCLASSIFICATIONID', '=', 'NC.NATCUSTCLASSIFICATIONID')
                    ->on('W.DATAAREAID', '=', 'NC.DATAAREAID');
            })
            ->where('c.DATAAREAID', $empresa)
            ->whereRaw('LTRIM(c.accountnum) = ?', [$user])
            ->first();

    } */

    public static function getInfoCliente($empresa, $cliente)
    {
        $countryMap = [
            'AF' => 'Afganistán',
            'AL' => 'Albania',
            'DE' => 'Alemania',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguila',
            'AQ' => 'Antártida',
            'AG' => 'Antigua y Barbuda',
            'SA' => 'Arabia Saudita',
            'DZ' => 'Argelia',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaiyán',
            'BS' => 'Bahamas',
            'BD' => 'Bangladés',
            'BB' => 'Barbados',
            'BH' => 'Baréin',
            'BE' => 'Bélgica',
            'BZ' => 'Belice',
            'BJ' => 'Benín',
            'BM' => 'Bermudas',
            'BY' => 'Bielorrusia',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia y Herzegovina',
            'BW' => 'Botsuana',
            'BR' => 'Brasil',
            'BN' => 'Brunéi',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'BT' => 'Bután',
            'CV' => 'Cabo Verde',
            'KH' => 'Camboya',
            'CM' => 'Camerún',
            'CA' => 'Canadá',
            'QA' => 'Catar',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CY' => 'Chipre',
            'VA' => 'Ciudad del Vaticano',
            'CO' => 'Colombia',
            'KM' => 'Comoras',
            'CG' => 'Congo',
            'CD' => 'Congo (Rep. Dem.)',
            'KP' => 'Corea del Norte',
            'KR' => 'Corea del Sur',
            'CI' => 'Costa de Marfil',
            'CR' => 'Costa Rica',
            'HR' => 'Croacia',
            'CU' => 'Cuba',
            'DK' => 'Dinamarca',
            'DM' => 'Dominica',
            'EC' => 'Ecuador',
            'EG' => 'Egipto',
            'SV' => 'El Salvador',
            'AE' => 'Emiratos Árabes Unidos',
            'ER' => 'Eritrea',
            'SK' => 'Eslovaquia',
            'SI' => 'Eslovenia',
            'ES' => 'España',
            'US' => 'Estados Unidos',
            'EE' => 'Estonia',
            'ET' => 'Etiopía',
            'PH' => 'Filipinas',
            'FI' => 'Finlandia',
            'FJ' => 'Fiyi',
            'FR' => 'Francia',
            'GA' => 'Gabón',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GD' => 'Granada',
            'GR' => 'Grecia',
            'GL' => 'Groenlandia',
            'GT' => 'Guatemala',
            'GN' => 'Guinea',
            'GQ' => 'Guinea Ecuatorial',
            'GW' => 'Guinea-Bisáu',
            'GY' => 'Guyana',
            'HT' => 'Haití',
            'HN' => 'Honduras',
            'HU' => 'Hungría',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IQ' => 'Irak',
            'IR' => 'Irán',
            'IE' => 'Irlanda',
            'IS' => 'Islandia',
            'IL' => 'Israel',
            'IT' => 'Italia',
            'JM' => 'Jamaica',
            'JP' => 'Japón',
            'JO' => 'Jordania',
            'KZ' => 'Kazajistán',
            'KE' => 'Kenia',
            'KG' => 'Kirguistán',
            'KI' => 'Kiribati',
            'KW' => 'Kuwait',
            'LA' => 'Laos',
            'LS' => 'Lesoto',
            'LV' => 'Letonia',
            'LB' => 'Líbano',
            'LR' => 'Liberia',
            'LY' => 'Libia',
            'LI' => 'Liechtenstein',
            'LT' => 'Lituania',
            'LU' => 'Luxemburgo',
            'MG' => 'Madagascar',
            'MY' => 'Malasia',
            'MW' => 'Malaui',
            'MV' => 'Maldivas',
            'ML' => 'Malí',
            'MT' => 'Malta',
            'MA' => 'Marruecos',
            'MU' => 'Mauricio',
            'MR' => 'Mauritania',
            'MX' => 'México',
            'FM' => 'Micronesia',
            'MD' => 'Moldavia',
            'MC' => 'Mónaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MZ' => 'Mozambique',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NI' => 'Nicaragua',
            'NE' => 'Níger',
            'NG' => 'Nigeria',
            'NO' => 'Noruega',
            'NZ' => 'Nueva Zelanda',
            'OM' => 'Omán',
            'NL' => 'Países Bajos',
            'PK' => 'Pakistán',
            'PW' => 'Palaos',
            'PA' => 'Panamá',
            'PG' => 'Papúa Nueva Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Perú',
            'PL' => 'Polonia',
            'PT' => 'Portugal',
            'GB' => 'Reino Unido',
            'CF' => 'República Centroafricana',
            'CZ' => 'República Checa',
            'DO' => 'República Dominicana',
            'RW' => 'Ruanda',
            'RO' => 'Rumanía',
            'RU' => 'Rusia',
            'WS' => 'Samoa',
            'KN' => 'San Cristóbal y Nieves',
            'SM' => 'San Marino',
            'VC' => 'San Vicente y las Granadinas',
            'SH' => 'Santa Elena',
            'LC' => 'Santa Lucía',
            'ST' => 'Santo Tomé y Príncipe',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leona',
            'SG' => 'Singapur',
            'SY' => 'Siria',
            'SO' => 'Somalia',
            'LK' => 'Sri Lanka',
            'SZ' => 'Suazilandia',
            'ZA' => 'Sudáfrica',
            'SD' => 'Sudán',
            'SS' => 'Sudán del Sur',
            'SE' => 'Suecia',
            'CH' => 'Suiza',
            'SR' => 'Surinam',
            'TH' => 'Tailandia',
            'TW' => 'Taiwán',
            'TZ' => 'Tanzania',
            'TJ' => 'Tayikistán',
            'TL' => 'Timor Oriental',
            'TG' => 'Togo',
            'TO' => 'Tonga',
            'TT' => 'Trinidad y Tobago',
            'TN' => 'Túnez',
            'TM' => 'Turkmenistán',
            'TR' => 'Turquía',
            'TV' => 'Tuvalu',
            'UA' => 'Ucrania',
            'UG' => 'Uganda',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistán',
            'VU' => 'Vanuatu',
            'VE' => 'Venezuela',
            'VN' => 'Vietnam',
            'YE' => 'Yemen',
            'DJ' => 'Yibuti',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabue',
        ];

        $provinceMap = [
            // EA1
            'O'   => 'Asturias',
            'AV'  => 'Ávila',
            'BU'  => 'Burgos',
            'S'   => 'Santander',
            'C'   => 'A Coruña',
            'LE'  => 'León',
            'LU'  => 'Lugo',
            'OR'  => 'Ourense',
            'P'   => 'Palencia',
            'PO'  => 'Pontevedra',
            'LO'  => 'Logroño',
            'SA'  => 'Salamanca',
            'SG'  => 'Segovia',
            'SO'  => 'Soria',
            'VA'  => 'Valladolid',
            'ZA'  => 'Zamora',
            // EA2
            'VI'  => 'Álava',
            'SS'  => 'Guipúzcoa',
            'HU'  => 'Huesca',
            'NA'  => 'Navarra',
            'TE'  => 'Teruel',
            'BI'  => 'Vizcaya',
            'Z'   => 'Zaragoza',
            // EA3
            'B'   => 'Barcelona',
            'GI'  => 'Girona',
            'L'   => 'Lleida',
            'T'   => 'Tarragona',
            // EA4
            'BA'  => 'Badajoz',
            'CC'  => 'Cáceres',
            'CR'  => 'Ciudad Real',
            'CU'  => 'Cuenca',
            'GU'  => 'Guadalajara',
            'M'   => 'Madrid',
            'TO'  => 'Toledo',
            // EA5
            'AB'  => 'Albacete',
            'A'   => 'Alicante',
            'CS'  => 'Castellón',
            'MU'  => 'Murcia',
            'V'   => 'Valencia',
            // EA6
            'IB'  => 'Illes Balears',
            // EA7
            'AL'  => 'Almería',
            'CA'  => 'Cádiz',
            'CO'  => 'Córdoba',
            'GR'  => 'Granada',
            'H'   => 'Huelva',
            'J'   => 'Jaén',
            'MA'  => 'Málaga',
            'SE'  => 'Sevilla',
            // EA8
            'GC'  => 'Las Palmas',
            'TF'  => 'Tenerife',
            // EA9
            'CE'  => 'Ceuta',
            'ML'  => 'Melilla',
        ];

        // CASE para país
        $caseCountry = "CASE";
        foreach ($countryMap as $code => $name) {
            $caseCountry .= " WHEN UPPER(c.country) = '$code' THEN '$name'";
        }
        $caseCountry .= " ELSE c.country END AS country_name";

        // CASE para provincia
        $caseProvince = "CASE";
        foreach ($provinceMap as $code => $name) {
            $caseProvince .= " WHEN UPPER(c.county) = '$code' THEN '$name'";
        }
        $caseProvince .= " ELSE c.county END AS county_name";

        return DB::connection('sqlsrv_AXDB30')->table('custtable as c')
            ->selectRaw("
            clf.NATCUSTCARACVALOR AS COMNAME,
            cl.NATCUSTCARAC,
            cl.NATCUSTCARACVALOR,
            p.EMAIL AS contact_email,
            LTRIM(c.accountnum) AS accountnum,
            c.name,
            c.address,
            c.phone,
            c.paymmode,
            c.paymtermid,
            c.creditmax AS CreditoMaximo,
            c.MANDATORYCREDITLIMIT as limiteObligatorio,
            c.CREDITRATING as CreditoTasacion,
            c.vatnum,
            c.email,
            c.emplint,
            c.zipcode,
            c.city,
            c.street,
            c.state,
            $caseCountry,
            $caseProvince,
            c.STATISTICSGROUP AS grupostat,
            c.URL AS webpages,
            c.WEBLOGIN,
            W.WEBLOGINGROUP AS TIPO,
            W.NOMBRECOMERCIAL AS NOMBRECOMERCIAL,
            NC.NATCUSTCLASSIFICATIONID,
            NC.DESCRIPTION as ClasificacionDescripcion
        ")
            ->leftJoin('NatCustCaracItem as cl', function ($join) {
                $join->on('cl.DATAAREAID', '=', 'c.DATAAREAID')
                    ->whereColumn('cl.CUSTACCOUNT', 'c.ACCOUNTNUM')
                    ->where('cl.NATCUSTCARAC', 'FACTURAE');
            })
            ->leftJoin('NatCustCaracItem as clf', function ($join) {
                $join->on('clf.DATAAREAID', '=', 'c.DATAAREAID')
                    ->whereColumn('clf.CUSTACCOUNT', 'c.ACCOUNTNUM')
                    ->where('clf.NATCUSTCARAC', 'FORMACOMER');
            })
            ->leftJoin('ContactPerson as p', function ($join) {
                $join->where('p.DATAAREAID', 'vi3')
                    ->on('p.NatCompanyId', '=', 'c.DATAAREAID')
                    ->whereColumn('p.CUSTACCOUNT', 'c.ACCOUNTNUM')
                    ->where('p.TITLE', 'FacturaE');
            })
            ->leftJoin('Sir_Weblogin as W', function ($join) {
                $join->on('c.weblogin', '=', 'W.WEBLOGIN')
                    ->whereColumn('c.dataareaid', 'W.dataareaid');
            })
            ->leftJoin('NATCUSTCLASIFICATION as NC', function ($join) {
                $join->on('W.NATCUSTCLASSIFICATIONID', '=', 'NC.NATCUSTCLASSIFICATIONID')
                    ->on('W.DATAAREAID', '=', 'NC.DATAAREAID');
            })
            ->where('c.DATAAREAID', $empresa)
            ->whereRaw('LTRIM(c.accountnum) = ?', [$cliente])
            ->first();
    }

    public static function getCheckDevoluciones($weblogin, $empresa, $year)
    {
        $impagado = DB::connection('sqlsrv_AXDB30') // O la conexión que uses para Axapta
            ->table('CUSTTRANS as t')
            ->join('CUSTTABLE as c', function ($join) {
                $join->on('c.accountnum', '=', 't.accountnum')
                    ->on('c.dataareaid', '=', 't.dataareaid');
            })
            ->where('t.dataareaid', $empresa)
            ->where('c.weblogin', $weblogin)
            ->whereRaw("t.txt LIKE '%DEV%'")
            ->whereRaw("YEAR(t.transdate) >= ?", [$year])
            ->whereRaw('(amountcur - Settleamountcur) <> 0')
            ->groupBy('c.weblogin')
            ->value(DB::raw('SUM(amountcur - Settleamountcur)')); // Devuelve el valor directamente

        return (float) $impagado;
    }

    public static function getClientesStatus($weblogin, $empresa)
    {
        $clientes = DB::connection('sqlsrv_AXDB30') // nombre de la conexión en config/database.php
            ->table('Custtable as c')
            ->join('empltable as e', function ($join) {
                $join->on('c.EMPLINT', '=', 'e.EMPLID')
                    ->where('e.dataareaid', '=', 'vir');
            })
            ->selectRaw("
            LTRIM(c.ACCOUNTNUM) as AXAPTA,
            c.NAMECOMER as NOMBRECOMERCIAL,
            c.namealias,
            c.NAME as NOMBRE,
            c.weblogin as WEBLOGIN,
            c.PHONE as TELEFONO,
            c.zipcode as CODIGOPOSTAL,
            c.DATAAREAID as EMPRESA,
            UPPER(c.AddressPrint) as AddressPrint
        ")
            ->whereIn('c.DATAAREAID', [$empresa])
            ->whereNotNull('c.BEGINDATE')
            ->where('c.CustGroup', '<>', 'BAJAS')
            ->where('c.WEBLOGIN', $weblogin)
            ->whereIn('c.CustType', [1, 2, 3, 5, 53])
            ->get();

        // Convertir resultado a array asociativo como en el original
        $datos = [];
        foreach ($clientes as $cliente) {
            $datos[$cliente->AXAPTA] = $cliente->namealias;
        }

        return $datos;
    }


    public static function getWebAndBusines($empresa, $cliente)
    {
        $query = "SELECT 
            o.NATCUSTSERVICIOID,
            s.name,
            CASE s.NATCUSTSERVICIOID
                WHEN '8' THEN 
                    CASE ISNULL((
                        SELECT TOP 1 MAX(SER.NAT_SINO)
                        FROM CUSTTABLE CLI WITH (NOLOCK)
                        INNER JOIN NATCUSTSERVICIOS SER WITH (NOLOCK)
                            ON SER.DATAAREAID = CLI.DATAAREAID
                            AND SER.CUSTACCOUNT = CLI.ACCOUNTNUM
                            AND SER.NATCUSTSERVICIOID = S.NATCUSTSERVICIOID
                            AND SER.NAT_SINO = 1
                        WHERE CLI.DATAAREAID = c.DATAAREAID
                            AND CLI.WEBLOGIN = c.WEBLOGIN
                            AND CLI.BEGINDATE IS NOT NULL
                            AND CLI.CustGroup IN ('ASOCIADOS', 'ASOCIADOS0')
                            AND CLI.CustType IN (1, 2, 3, 5, 6)
                    ), 2)
                    WHEN 2 THEN 2
                    ELSE '1'
                    END
                ELSE 
                    CASE ISNULL(o.Nat_sino, '')
                        WHEN 2 THEN 2
                        WHEN '' THEN 2
                        ELSE 1
                    END
            END AS Nat_sino,
            o.Url
        FROM CUSTTABLE c WITH (NOLOCK)
        INNER JOIN natcustservicios o WITH (NOLOCK)
            ON c.ACCOUNTNUM = o.CUSTACCOUNT
            AND c.DATAAREAID = o.DATAAREAID
        INNER JOIN Natcustserviciostable s
            ON o.natcustservicioid = s.NATCUSTSERVICIOID
        WHERE o.dataareaid = ?
            AND LTRIM(o.custaccount) = ?
            AND s.dataareaid = 'vi2'";

        $string = (string) $cliente;

        $rows = DB::connection('sqlsrv_AXDB30')->select($query, [$empresa, $string]);

        $datos = [];
        $hayDatos = false;

        foreach ($rows as $row) {
            $datos[$row->NATCUSTSERVICIOID] = [
                'status' => $row->Nat_sino,
                'name' => $row->name,
                'url' => $row->Url,
            ];
            $hayDatos = true;
        }

        if (!$hayDatos) {
            $datos[1]  = ['status' => 2, 'name' => "Ficha Web", 'url' => ""];
            $datos[2]  = ['status' => 2, 'name' => "Imagenes Actualizadas", 'url' => ""];
            $datos[3]  = ['status' => 2, 'name' => "Servicios Detallados", 'url' => ""];
            $datos[4]  = ['status' => 2, 'name' => "Google My Business", 'url' => ""];
            $datos[5]  = ['status' => 2, 'name' => "Tour Virtual", 'url' => ""];
            $datos[6]  = ['status' => 2, 'name' => "Natural View / Ugosoft", 'url' => ""];
            $datos[7]  = ['status' => 2, 'name' => "Asistente de Venta", 'url' => ""];
            $datos[13] = ['status' => 2, 'name' => "Uso Fideliza", 'url' => ""];
        }

        return $datos;
    }


    public static function getFinantial($weblogin, $empresa)
    {
        $query = "
        SELECT DISTINCT 
            co.FROMDATE, 
            co.TODATE, 
            t.NAT_CONTRATOSTYPEID, 
            t.NAT_CONTRATOSNAME
        FROM Nat_contratosTable co
        INNER JOIN CUSTTABLE c ON co.DATAAREAID = c.DATAAREAID
            AND co.CUSTACCOUNT = c.ACCOUNTNUM
        INNER JOIN Nat_ContratosType t ON t.DATAAREAID = 'vi3'
            AND t.NAT_CONTRATOSTYPEID = co.NAT_CONTRATOSTYPEID
        WHERE co.NAT_CONTRATOSTYPEID IN (
            '101','89','121','100','123','124','131','142','143','139','95','96','149','150','153'
        )
        AND LTRIM(c.WEBLOGIN) = ?
        AND c.BEGINDATE IS NOT NULL
        AND c.CustGroup IN ('ASOCIADOS', 'ASOCIADOS0')
        AND c.DATAAREAID = ?
        AND (
            co.FROMDATE <= GETDATE() OR co.FROMDATE = ''
        )
        AND (
            co.TODATE >= GETDATE() OR co.TODATE = ''
        )";

        $rows = DB::connection('sqlsrv_AXDB30')->select($query, [$weblogin, $empresa]);

        $datos = [];

        if (!empty($rows)) {
            foreach ($rows as $row) {
                $datos[$row->NAT_CONTRATOSTYPEID] = $row->NAT_CONTRATOSNAME;
            }
        }

        return $datos;
    }

    public static function setRGPD($empresa, $cliente)
    {
        $string = (string) $cliente;
        // 1. Obtener el VATNUM desde CUSTTABLE
        $vatnum = DB::connection('sqlsrv_AXDB30')
            ->table('custtable')
            ->where('dataareaid', $empresa)
            ->whereRaw('LTRIM(accountnum) = ?', [$string])
            ->value('vatnum');

        if (!$vatnum || trim($vatnum) === '') {
            return 2; // No hay VATNUM → RGPD no aceptado
        }

        // 2. Buscar contratos de tipo '95' en otra empresa con ese VATNUM
        $query = "
        SELECT DISTINCT co.FROMDATE, co.TODATE, t.NAT_CONTRATOSTYPEID, t.NAT_CONTRATOSNAME
        FROM Nat_contratosTable co
        INNER JOIN CUSTTABLE c ON co.DATAAREAID = c.DATAAREAID
            AND co.CUSTACCOUNT = c.ACCOUNTNUM
        INNER JOIN Nat_ContratosType t ON t.DATAAREAID = 'vi3'
            AND t.NAT_CONTRATOSTYPEID = co.NAT_CONTRATOSTYPEID
        WHERE co.NAT_CONTRATOSTYPEID IN ('95')
            AND LTRIM(c.VATNUM) = ?
            AND c.BEGINDATE IS NOT NULL
            AND c.CustGroup IN ('ASOCIADOS', 'ASOCIADOS0')
            AND c.DATAAREAID = 'nsl'
            AND (co.FROMDATE <= GETDATE() OR co.FROMDATE = '')
            AND (co.TODATE >= GETDATE() OR co.TODATE = '')";

        $result = DB::connection('sqlsrv_AXDB30')->select($query, [$vatnum]);

        return count($result) > 0 ? 1 : 2;
    }

    public static function setCuota($empresa, $weblogin, $cliente)
    {
        $string = (string) $cliente;

        $rows = DB::connection('sqlsrv_AXDB30')
            ->table('custtable')
            ->select(DB::raw('LTRIM(accountnum) as id'), 'custgroup')
            ->where('dataareaid', $empresa)
            ->whereRaw('LTRIM(weblogin) = ?', [$weblogin])
            ->get();


        foreach ($rows as $row) {
            if ($row->id === $string) {
                if (trim($row->custgroup) === 'ASOCIADOS0') {
                    return 2;
                }
            }
        }

        return 1;
    }

    public static function setCRM($empresa, $weblogin)
    {
        // Elegir conexión según empresa
        $connection = ($empresa === 'red') ? 'sqlsrv_red' : 'sqlsrv_default';

        $query = "
        SELECT COUNT(*) AS contador
        FROM MKT_CampanasOK
        WHERE mkt_data BETWEEN DATEADD(DAY, -30, GETDATE()) AND GETDATE()
          AND WEBLOGIN = ?";

        $result = DB::connection($connection)->selectOne($query, [$weblogin]);

        if ($result && $result->contador > 0) {
            return 1;
        }

        return 2;
    }

    public static function setStatusCRM($empresa, $weblogin, $cliente)
    {
        // Define el valor fijo para DATAAREAID según empresa
        $dataAreaId = ($empresa === 'red') ? 'RED' : 'NSL';

        // Construimos el query en SQL con placeholders
        $sql = "
        SELECT DISTINCT 
            LOWER(C.DATAAREAID) AS EMPRESA,
            LOWER(C.WEBLOGIN) AS WEBLOGIN,
            UPPER(LTRIM(C.ACCOUNTNUM)) AS CLIENTE,
            MAX(CASE ISNULL(TIE_Baja, 'S')
                WHEN 'S' THEN 'NO'
                ELSE 'SI'
            END) AS SERVICIO_SN,
            'FIDELIZA' AS SERVICIO_NOMBRE
        FROM Custtable C WITH (NOLOCK)
        LEFT JOIN CRM.DBO.TIENDA T WITH (NOLOCK)
            ON T.WEBLOGIN COLLATE Modern_Spanish_CI_AI = C.WEBLOGIN
            AND T.TIE_CODIGOAXAPTA COLLATE Modern_Spanish_CI_AI = LTRIM(C.ACCOUNTNUM)
        WHERE C.DATAAREAID = ?
            AND C.BEGINDATE IS NOT NULL
            AND C.CustGroup IN ('ASOCIADOS','ASOCIADOS0')
            AND C.CustType IN (1,2,3,5,6)
            AND C.WEBLOGIN = ?
            AND LTRIM(C.ACCOUNTNUM) = ?
        GROUP BY C.DATAAREAID, C.WEBLOGIN, C.ACCOUNTNUM;";

        // Usa la conexión que necesites (ajusta el nombre si es otro)
        $db = DB::connection('sqlsrv_AXDB30');

        $string = (string) $cliente;

        $result = $db->select($sql, [$dataAreaId, $weblogin, $string]);

        // Itera sobre resultados y devuelve según valor
        foreach ($result as $row) {
            if (strtoupper($row->SERVICIO_SN) === 'SI') {
                return 1;
            } else {
                return 2;
            }
        }

        // Si no hubo resultados, podrías decidir qué devolver
        return 2;
    }

    public static function setOwnProduct($empresa, $weblogin)
    {
        $sql = "
        SELECT SUM(Qty) AS total, coleccion
        FROM VentasFacturadas
        WHERE Empresa = ?
          AND weblogin = ?
          AND Fecha >= DATEADD(MM, -12, GETDATE())
          AND Coleccion IN ('ANTONIO MIRO', 'MIROJEANS', 'BE NATURAL', 'BE HAPPY', 'MONSINE')
          AND NATidFamilia IN ('SOL', 'MONTURAS')
        GROUP BY coleccion";

        $db = DB::connection('sqlsrv_AXDB30'); // Ajusta el nombre de conexión si hace falta

        $result = $db->select($sql, [$empresa, $weblogin]);

        $datos = [];
        foreach ($result as $row) {
            $datos[$row->coleccion] = $row->total;
        }

        return $datos;
    }

    public static function setMacro($empresa, $weblogin)
    {
        $sql = "
        SELECT c.natcustcaracvalor
        FROM NatCustCaracItem c WITH (NOLOCK)
        INNER JOIN Custtable a WITH (NOLOCK)
            ON c.dataareaid = a.dataareaid
            AND c.custAccount = a.accountnum
        INNER JOIN NatCustCaracItem s WITH (NOLOCK)
            ON s.dataareaid = c.dataareaid
            AND s.Natcustcarac = c.Natcustcarac
            AND s.custAccount = c.custAccount
        WHERE c.dataareaid = ?
          AND a.weblogin = ?
          AND s.Natcustcarac = 'CAMPUBLI'
          AND s.natcustcaracvalor = 'SI'";

        $db = DB::connection('sqlsrv_AXDB30'); // Ajusta el nombre de la conexión

        $result = $db->select($sql, [$empresa, $weblogin]);

        if (!empty($result) && isset($result[0]->natcustcaracvalor) && $result[0]->natcustcaracvalor === 'SI') {
            return 1;
        } else {
            return 2;
        }
    }

    public static function setMicro($empresa, $weblogin)
    {
        $sql = "SELECT TOP 1 Empresa FROM [VentasFactAlba_Micros] WHERE empresa = ? AND weblogin = ?";

        $db = DB::connection('sqlsrv_AXDB30'); // Ajusta el nombre de la conexión según corresponda

        $result = $db->select($sql, [$empresa, $weblogin]);

        if (!empty($result) && isset($result[0]->Empresa) && $result[0]->Empresa == $empresa) {
            return 1;
        } else {
            return 2;
        }
    }


    //===============================================================================================================

    public static function getAvisos($weblogin, $empresa)
    {
        return DB::connection('sqlsrv_AXDB30')->table('Nat_NoteTable as n')
            ->where('n.WEBLOGIN', $weblogin)
            ->where('n.HIDEN', '<>', 1)
            ->where('n.EMPRESA', $empresa)
            ->count();
    }

    public static function getInfoPath($empresa, $weblogin)
    {
        // Primer valor: par_valor desde Nat_Sir_Config
        $basePath = DB::connection('sqlsrv_AXDB30')
            ->table('Nat_Sir_Config')
            ->where('par_key', 'sir_jrampath')
            ->where('dataareaid', $empresa)
            ->value('par_valor'); // Devuelve directamente el valor

        // Segundo valor: sir_path desde SIR_URL
        $sirPath = DB::connection('sqlsrv_AXDB30')
            ->table('SIR_URL')
            ->where('WEBLOGIN', $weblogin)
            ->value('sir_path'); // Devuelve directamente el valor

        // Concatenar y devolver
        return $basePath . $sirPath;
    }

    public static function getPDweblogin($empresa, $weblogin)
    {
        $results = DB::connection('sqlsrv_AXDB30')
            ->table('NatShopCaracItem')
            ->selectRaw("
            SUBSTRING(NATSHOPUNICID, 1, CHARINDEX('_', NATSHOPUNICID) - 1) AS weblogin,
            NATSHOPCARAC,
            SUBSTRING(NATSHOPUNICID, CHARINDEX('_', NATSHOPUNICID) + 1, 2) AS Tienda
        ")
            ->where('dataareaid', $empresa)
            ->where('NATSHOPCARAC', 'PD_Activo')
            ->whereRaw("SUBSTRING(NATSHOPUNICID, 1, CHARINDEX('_', NATSHOPUNICID) - 1) = ?", [$weblogin])
            ->get();

        // Reestructuramos el resultado para que coincida con tu formato original
        return $results->map(function ($row) {
            return [
                'weblogin'  => $row->weblogin,
                'estadopd'  => $row->NATSHOPCARAC,
                'Tienda'    => $row->Tienda,
            ];
        })->toArray();
    }

    /* public static function getVisitasCliente($cliente, $empresa, $year)
    {
        $codigo = $empresa . $cliente;
        $lastYear = $year - 1;

        $result = DB::connection('sqlsrv_AXDB30') // nombre de la conexión personalizada
            ->table('meetings as m')
            ->join('accounts as a', 'a.id', '=', 'm.parent_id')
            ->select('m.date_start as fechaInicio', 'm.parent_id', 'm.status')
            ->where('m.parent_id', 'like', '%' . $codigo . '%')
            ->whereRaw("YEAR(m.date_start) >= ?", [$lastYear])
            ->orderBy('m.date_start', 'desc')
            ->get();

        return $result;
    } */
}
