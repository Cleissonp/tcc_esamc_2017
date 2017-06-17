/*#include é utilizado para incluir bibliotecas externas ao scketch.
  Dessa forma pode-se acessar um grande número de bibliotecas seja
  ela do padrão da linguagem C ou as feitas especialmente para Arduino,
  ou até mesmo bibliotecas feitas pelo programador.*/
#include <SPI.h>
#include <Ethernet.h>
#include <Servo.h>

/* Nomeando um valor constante antes de de iniciar a programação
  O compilador substituirá esse a constante no lugar deste nome
  na hora da compilação. Isto facilita na programação e deixa o código mais agradável.
  A sintaxe é mesma da linguagem C */
#define portaweb  80
#define luz_garagem 22
#define luz_interna 23
#define luz_Sala 24
#define luz_Cozinha 25
#define luz_Suite 26
#define luz_Quarto 27
#define luz_Banheiro 28
#define luz_externa 29
#define garage 9
#define VALOR_ESCURO 400

//Parametro de Inicialização do Shield Ethernet
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = { 192, 168, 0 , 99 };
//Endereço ip do Servidor
byte raspberrypi[] = { 192, 168, 0 , 100 };
char ip_raspberrypi [] = "192.168.0.100";
//Variavel para Armazenar a leitura da Temperatura
int valorlidoSensor = 0;
float leitura_sensor_arduino = 0;
//Paramentro para Enviar a Leitura para o Servidor
char parametroSensorphp [] = "/arduino/salvar.php?sensor1=";


unsigned long previousMillis = 0;
const long interval = 60000;

//Inicialização do Modo Cliente e Server do Shield Ethernet
EthernetClient client;
EthernetServer server(portaweb);
Servo motor; // Iniciando o MicroServo

void setup()
{
  Ethernet.begin(mac, ip);
  motor.attach(garage);
  server.begin();
  Serial.begin(9600);
  for (int i = 22; i <= 30; i++)
    pinMode(i, OUTPUT);

}

void loop() {
  leitura_Sensorlm35();
  envio_leitura_web();
  Acionamentos();
  FotoCelula();

}

void leitura_Sensorlm35()
{
  /*O LM35 não necessita de qualquer calibração externa ou “trimming” para fornecer os dados com exactidão,
    porém para ser lido pelo Arduino necessita de conversão,
    pois o Arduino lê apenas valores inteiros entre 0 e 1023.
    Assim sabendo que este sensor tem uma resolução de 10mV por cada 1ºC poderemos deduzir uma expressão
    para a temperatura em função do valor lido.
    O sensor será alimentado pelo Arduino que fornece 5V,
    como as entradas analógicas têm uma resolução de 10 bits, ou seja, 2^10 = 1024 e cada
    grau corresponde a 10 mV então a expressão da temperatura em função do valor lido na entrada analógica do
    Arduino será:
    temperatura = (valor lido * (5/1023))*100 temperatura = 0,0048875855*valor lido*/
  int pinoSensor = 0;

  static unsigned long delay1;
  if ( (millis() - delay1) < 200) {
    valorlidoSensor = analogRead(pinoSensor);    //le valor na entrada analógica
    leitura_sensor_arduino = (valorlidoSensor * 0.00488);
    leitura_sensor_arduino = leitura_sensor_arduino * 100;
    //Serial.print("Temperatura: ");
    //Serial.println(leitura_sensor_arduino);
  }
  if ( (millis() - delay1) < 400) {
    delay1 = millis();
  }
}



void FotoCelula() {
  int val;
  val = analogRead(1);    // ler o valor do potenciômetro
  //  Serial.println(val);            //envia valor para o computador

  if (val < VALOR_ESCURO)        //se menor que valor definido
  {
    digitalWrite(luz_externa, HIGH);   //liga rele
  }
  else
  {
    digitalWrite(luz_externa, LOW);   //desliga rele
  }
}


void envio_leitura_web()
{
  //  unsigned long previousMillis = 0;
  //const long interval = 60000;
  float temperatura = leitura_sensor_arduino;
  unsigned long currentMillis = millis();

  if (currentMillis - previousMillis >= interval)
  {
    previousMillis = currentMillis;
    if (client.connect(raspberrypi, portaweb))
    {

      //      Serial.println("connected");
      //      Serial.print("Temperatura web: ");
      //      Serial.println(temperatura);

      //Faz uma requisição HTTP

      client.print("GET ");
      client.print(parametroSensorphp);
      client.println (leitura_sensor_arduino);
      client.println("HTTP/1.1");
      //      client.print("Host: ");
      //      client.println(ip_raspberrypi);
//      client.println("Conexao: Fechada");
      client.println();
      client.stop();

    }
    else
    {
      //Caso não seja possível obter uma conexao
      Serial.println("connection failed");
    }
  }
}


void Acionamentos() {
  /* Declaração da variavel cliente que recebera as requisições de server.available();
  */
  EthernetClient client = server.available();
  int val;
  if (client)
  {

    //  client.read() - Função nativa da biblioteca

    switch (client.read())
    {
      case '1':
        digitalWrite(luz_garagem, HIGH);
        break;
      case '2':
        digitalWrite(luz_garagem, LOW);
        break;
      case '3':
        digitalWrite(luz_interna, HIGH);
        break;
      case '4':
        digitalWrite(luz_interna, LOW);;
        break;

      case '5':
        motor.write(90);//Angulo do Motor
        break;
      case '6':
        motor.write(0);//Angulo do Motor
        break;
      case '7':
        digitalWrite(luz_Sala, HIGH);
        break;
      case '8':
        digitalWrite(luz_Sala, LOW);
        break;

      case '9':
        digitalWrite(luz_Cozinha, HIGH);
        break;
      case 'A':
        digitalWrite(luz_Cozinha, LOW);
        break;
      case 'B':
        digitalWrite(luz_Suite, HIGH);
        break;
      case 'C':
        digitalWrite(luz_Suite, LOW);
        break;

      case 'D':
        digitalWrite(luz_Quarto, HIGH);
        break;
      case 'E':
        digitalWrite(luz_Quarto, LOW);
        break;
      case 'F':
        digitalWrite(luz_Banheiro, HIGH);
        break;
      case 'G':
        digitalWrite(luz_Banheiro, LOW);
        break;


      default:
        delay (1);

    }

  }
  /*client.stop()- Função que para o serviço de rede até que chegue uma nova requisição via socket*;*/
  client.stop();

}
