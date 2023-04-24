from car import Car
from account import Account

if __name__ == "__main__":
    print('Hola Mundo')
    car = Car("ABC123",Account("Samuel Cruz", "SCZ123"))
    print(vars(car))
    print(vars(car.driver))